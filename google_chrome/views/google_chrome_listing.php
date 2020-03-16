<?php 

$this->view('listings/default',
[
	"i18n_title" => 'google_chrome.listing.title',
	"table" => [
		[
			"column" => "machine.computer_name",
			"i18n_header" => "listing.computername",
			"formatter" => "clientDetail",
			"tab_link" => "google_chrome-tab",
		],
		[
			"column" => "reportdata.serial_number",
			"i18n_header" => "serial",
		],
		[
			"column" => "google_chrome.item1",
			"i18n_header" => "google_chrome.listing.version",
		],
	]
]);
