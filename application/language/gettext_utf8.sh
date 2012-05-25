#!/bin/bash

# This script does the following tasks:
# - Extracts all translatable strings from source code files
# - Generates a template file messages.pot
# - Generates a catalog file messages.po merging it with any previously existant catalog
# - Promt to translate the new strings
# - Compile message catalog to binary gettext format

# Note: Only supports files whose translatable strings are pure UTF-8 (Spanish,French, etc.)!.
# For ASCII (English) files check gettext_ascii.sh in the same direcoty


SCRIPT_DIR="$( cd "$( dirname "$0" )" && pwd )" #Usar este para obtener la ruta sin resolver los enlaces simbolicos
#SCRIPT_DIR="$( cd -P "$( dirname "$0" )" && pwd )" #Usar este para obtener la ruta resolviendo los enlaces simbolicos
cd "$SCRIPT_DIR"
SOURCES_DIR="$SCRIPT_DIR/../"

echo "Elige idioma:
	1.- Ingles
	2.- Frances
	3.- Espanol"
read LANGUAGE
case "$LANGUAGE" in
	"1" )LANGUAGE="en_US";;
	"2" )LANGUAGE="fr_FR";;
	"3" )LANGUAGE="es_ES";; #Aunque es el mismo que el nativo hay que generar la estructura para evita el bug de pantalla en blanco
	*)exit;;
esac

#Create direcoty structure for selected language
LANGUAGE_DIR=${SOURCES_DIR}language/${LANGUAGE}/LC_MESSAGES/
mkdir -p ${LANGUAGE_DIR}

#Create template (messages.pot)
find ${SOURCES_DIR} -iname "*.php" | xgettext --no-wrap --sort-by-file --from-code=UTF-8 -o- -f- | sed "s,${SOURCES_DIR},,g" > ${LANGUAGE_DIR}messages.pot

#Initialize new message catalog or backup old
if [ -f ${LANGUAGE_DIR}messages.po ]; then
	cp ${LANGUAGE_DIR}messages.po ${LANGUAGE_DIR}messages.po.old
else
	msginit --no-wrap --locale=${LANGUAGE} --no-translator --input=${LANGUAGE_DIR}messages.pot --output-file=${LANGUAGE_DIR}messages.po || exit
	sed -i 's/^msgstr .*/msgstr ""/g' ${LANGUAGE_DIR}messages.po
	cp ${LANGUAGE_DIR}messages.po ${LANGUAGE_DIR}messages.po.old
fi

#Merge old message catalog and new template
msgmerge --no-wrap -q -v -o ${LANGUAGE_DIR}messages.po ${LANGUAGE_DIR}messages.po.old ${LANGUAGE_DIR}messages.pot || exit

#Translate new strings
$EDITOR ${LANGUAGE_DIR}messages.po

#Compile message catalog to binary format
msgfmt --verbose --output-file ${LANGUAGE_DIR}messages.mo ${LANGUAGE_DIR}messages.po