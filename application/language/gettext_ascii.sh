#!/bin/bash

# This script does the following tasks:
# - Extracts all translatable strings from source code files
# - Generates a template file messages.pot
# - Generates a catalog file messages.po merging it with any previously existant catalog
# - Promt to translate the new strings
# - Compile message catalog to binary gettext format

# Note: Only supports files whose translatable strings are pure ASCII (English)!.
# For UTF-8 (Spanish,French, etc.) files check gettext_utf8.sh in the same direcoty


# Funcion que imprime un texto en un color
function color
{
	local color=""

	case $2 in
		"amarillo") color="1;33m";;
		"azul") color="1;34m";;
		"azul oscuro") color="0;34m";;
		"blanco") color="1;37m";;
		"cyan") color="1;36m";;
		"cyan oscuro") color="0;36m";;
		"gris") color="0;37m";;
		"gris oscuro") color="1;30m";;
		"marron") color="0;33m";;
		"negro") color="0;30m";;
		"morado") color="1;35m";;
		"morado oscuro") color="0;35m";;
		"rojo") color="1;31m";;
		"rojo oscuro") color="0;31m";;
		"verde oscuro") color="0;32m";;
		#"verde" por defecto
		*) color="1;32m";;
	esac

	echo -e "\033[$color$1\033[0m"
}

color "Elige idioma:" morado
color "        1.- Espanol "
color "        2.- Frances"
color "        3.- Ingles"

read idioma

case "$idioma" in

	"1" )
		idioma="es_ES";;
	"2" )
		idioma="fr_FR";;
	"3" )
		idioma="en_US";;	#Aunque es el mismo que el nativo hay que generar la estructura para evita el bug de pantalla en blanco
	*)
		color "Opcion incorrecta" rojo
		exit;;
esac

SCRIPT_DIR="$( cd "$( dirname "$0" )" && pwd )" #Usar este para obtener la ruta sin resolver los enlaces simbolicos
#SCRIPT_DIR="$( cd -P "$( dirname "$0" )" && pwd )" #Usar este para obtener la ruta resolviendo los enlaces simbolicos
cd "$SCRIPT_DIR"
SOURCE_DIR="$SCRIPT_DIR/../"
LOCALE_DIR="language/$idioma/LC_MESSAGES/"
TRANSLATION_FILE="${SOURCE_DIR}${LOCALE_DIR}messages.po"
TEMPLATE_FILE="${SOURCE_DIR}${LOCALE_DIR}messages.pot"
BINARY_FILE="${SOURCE_DIR}${LOCALE_DIR}messages.mo"
TEMP="/tmp/tmp_php_gettext"

function mezclar
{
	# Para que msgfmt no genere el binario en ISO 8859-1 es necesario que el archivo .po no tenga cabecera.
	# En cambio, para que msgmerge no borre los caracteres especiales del archivo .po es necesario que tengan cabecera.
	# Solucion: antes de usar msgmerge anadir la cabecera, usar msgmerge, quitarsela, y usar  msgfmt

	color "\tAnadiendo header para que no de problemas al mezclar"

	cp "$SCRIPT_DIR/header" ${TEMP}
	cp "$SCRIPT_DIR/header" ${TEMP}2
	cat ${TRANSLATION_FILE} >> ${TEMP}
	cat ${TEMPLATE_FILE} >> ${TEMP}2

	color "Mezclando con plantilla vieja =====================" amarillo
	color "\tHaciendo copia de seguridad de lo ya traducido"
	if [ -f $TRANSLATION_FILE.copia ]; then
		cp $TRANSLATION_FILE.copia $TRANSLATION_FILE.copia.old
	fi
	cp $TRANSLATION_FILE $TRANSLATION_FILE.copia

	color "\tRealizando mezcla"
	msgmerge --no-wrap -q -v -o ${TEMP}3 ${TEMP} ${TEMP}2

	#Aqui habria que quital la cabecera a ${TRANSLATION_FILE}
	#Contamos el numero de lineas de cada fichero y mostramos la diferencia
	total=`cat ${TEMP}3 | wc -l`
	diferencia=`expr $total - 6`
	tail -n $diferencia ${TEMP}3 > ${TRANSLATION_FILE}
}

clear
color "[SCRIPT PARA GENERAR UNA NUEVA PLANTILLA SIN TRADUCIR ]" morado
color "Preparativos ======================================" amarillo
color "\tCreando la estructura de directorios"
mkdir -p ${SOURCE_DIR}${LOCALE_DIR} || (color "FALLO" rojo && exit)

color "Generando plantilla ===============================" amarillo
color "\tConstrutendo lista de archivos PHP"
archivos=`find ${SOURCE_DIR} -name "*.php"`

color "\tCreando plantilla sin traducir"
xgettext --no-wrap --sort-by-file --omit-header --from-code=UTF-8 --output ${TEMPLATE_FILE} $archivos || (color "FALLO" rojo && exit)


color "\tEliminado ruta absoluta de los comentarios"
sed "s,$SOURCE_DIR,,g" ${TEMPLATE_FILE} > ${TEMP}
cp ${TEMP} ${TEMPLATE_FILE}

if [ -f $TRANSLATION_FILE ]; then
	mezclar
	color "\tAhora traduce el resultado de la mezcla" cyan
else
	cp ${TEMPLATE_FILE} $TRANSLATION_FILE
	color "\tAhora traduce la nueva plantilla" cyan
fi

$EDITOR $TRANSLATION_FILE


color "Generando version binaria =========================" amarillo
msgfmt --verbose --output-file ${BINARY_FILE} ${TRANSLATION_FILE} || (color "FALLO" rojo && exit)
