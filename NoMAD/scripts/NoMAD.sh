#!/bin/sh

# Script to collect data
# and put the data into outputfile

CWD=$(dirname $0)
CACHEDIR="$CWD/cache/"
OUTPUT_FILE="${CACHEDIR}NoMAD.txt"
SEPARATOR=' = '

# Skip manual check
if [ "$1" = 'manualcheck' ]; then
	echo 'Manual check: skipping'
	exit 0
fi

# Create cache dir if it does not exist
mkdir -p "${CACHEDIR}"

# Ad Domain
addomain=$(defaults read /Library/Managed\ Preferences/com.trusourcelabs.NoMAD.plist | grep ADDomain | cut -d'"' -f2)
kerberosrealm=$(defaults read /Library/Managed\ Preferences/com.trusourcelabs.NoMAD.plist | grep KerberosRealm | cut -d'"' -f2)
localpasswordsync=$(defaults read /Library/Managed\ Preferences/com.trusourcelabs.NoMAD.plist | grep UseKeychain | cut -d'=' -f2 | sed 's/;//')
usekeychain=$(defaults read /Library/Managed\ Preferences/com.trusourcelabs.NoMAD.plist | grep UseKeychain | cut -d'=' -f2 | sed 's/;//')

# Business logic goes here

# Output data here
echo "item1${SEPARATOR}$addomain" > ${OUTPUT_FILE}
echo "item2${SEPARATOR}$kerberosrealm" >> ${OUTPUT_FILE}
echo "item3${SEPARATOR}$localpasswordsync" >> ${OUTPUT_FILE}
echo "item4${SEPARATOR}$usekeychain" >> ${OUTPUT_FILE}