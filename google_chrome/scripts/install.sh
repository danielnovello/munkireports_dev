#!/bin/bash

# google_chrome controller
CTL="${BASEURL}index.php?/module/google_chrome/"

# Get the scripts in the proper directories
"${CURL[@]}" "${CTL}get_script/google_chrome.sh" -o "${MUNKIPATH}preflight.d/google_chrome.sh"

# Check exit status of curl
if [ $? = 0 ]; then
	# Make executable
	chmod a+x "${MUNKIPATH}preflight.d/google_chrome.sh"

	# Set preference to include this file in the preflight check
	setreportpref "google_chrome" "${CACHEPATH}google_chrome.txt"

else
	echo "Failed to download all required components!"
	rm -f "${MUNKIPATH}preflight.d/google_chrome.sh"

	# Signal that we had an error
	ERR=1
fi
