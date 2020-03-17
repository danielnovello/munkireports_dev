#!/bin/bash

# NoMAD controller
CTL="${BASEURL}index.php?/module/NoMAD/"

# Get the scripts in the proper directories
"${CURL[@]}" "${CTL}get_script/NoMAD.sh" -o "${MUNKIPATH}preflight.d/NoMAD.sh"

# Check exit status of curl
if [ $? = 0 ]; then
	# Make executable
	chmod a+x "${MUNKIPATH}preflight.d/NoMAD.sh"

	# Set preference to include this file in the preflight check
	setreportpref "NoMAD" "${CACHEPATH}NoMAD.txt"

else
	echo "Failed to download all required components!"
	rm -f "${MUNKIPATH}preflight.d/NoMAD.sh"

	# Signal that we had an error
	ERR=1
fi
