#!/bin/bash
# Script to translate using GNU Gettext

####### CONFIG #################################################################

# Where to look for files ...
BASE_DIR="$( cd "$( dirname "$0" )" && pwd )/.." # Returns the parent of the directory containing this script

# What files to look for ...
EXT="*.php"

# Directory relative to $BASE_DIR where translations will be stored
LOCALE_DIR="language"

####### DO NOT MODIFY BELOW HERE ###############################################

function exit_error
{
	echo "ERROR: $1"
	exit 1
}

# Choose locale
echo "Choose language you are going to transtale into:
	1.- English
	2.- Spanish"
read LOCALE
case "$LOCALE" in
	"1" )LOCALE="en_US";;
	"2" )LOCALE="es_ES";;
	*)exit;;
esac

# Create destination dir
DIR="$BASE_DIR/$LOCALE_DIR/$LOCALE/LC_MESSAGES"
mkdir -p "$DIR" || exit_error "Unable to create $DIR"

# Generate .pot template
TEMPLATE_FILE="$DIR/messages.pot"
find "$BASE_DIR" -type f -iname "$EXT" | xgettext --no-wrap --sort-by-file --from-code=UTF-8 -o- -f- | sed "s,$BASE_DIR/,,g" | sed "s,; charset=CHARSET,; charset=UTF-8,g" > $TEMPLATE_FILE

# If an old translation exists, make a copy and merge it with the new template
TRANSLATED_FILE="$DIR/messages.po"
if [ -f "$TRANSLATED_FILE" ]; then
	cp "$TRANSLATED_FILE" "$TRANSLATED_FILE".old
	msgmerge --no-wrap -q -v -o "$TRANSLATED_FILE" "$TRANSLATED_FILE" "$TEMPLATE_FILE" || exit_error "Unable to merge old translation"
else
	#msginit --no-wrap --no-translator --locale=$LOCALE --input="$TEMPLATE_FILE" --output-file="$TRANSLATED_FILE" || exit_error "Unable to init translation"
	cp "$TEMPLATE_FILE" "$TRANSLATED_FILE"
fi

# Translate
$EDITOR "$TRANSLATED_FILE" > /dev/null 2>&1

# Generate binary catalog file
msgfmt --verbose --output-file "$DIR/messages.mo" "$TRANSLATED_FILE" || exit_error "Unable to generae binary catalog"

exit 0
