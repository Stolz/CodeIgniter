#!/bin/sh

#Search code for pending tasks

SCRIPT_DIR="$( cd "$( dirname "$0" )" && pwd )" #No resolve los enlaces simbolicos
#SCRIPT_DIR="$( cd -P "$( dirname "$0" )" && pwd )" #Resuelve los enlaces simbolicos

cd $SCRIPT_DIR
grep -r --colour=auto --exclude=to-do.sh --exclude-dir=logs "to-do" .



