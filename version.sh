#!/bin/sh

SCRIPT_DIR="$( cd "$( dirname "$0" )" && pwd )" #No resolve los enlaces simbolicos
#SCRIPT_DIR="$( cd -P "$( dirname "$0" )" && pwd )" #Resuelve los enlaces simbolicos

grep CI_VERSION $SCRIPT_DIR/system/core/CodeIgniter.php


