<?php 

$this->view('listings/default',
[
	"i18n_title" => 'NoMAD.listing.title',
	"table" => [
		[
			"column" => "machine.computer_name",
			"i18n_header" => "listing.computername",
			"formatter" => "clientDetail",
			"tab_link" => "NoMAD-tab",
		],
		[
			"column" => "reportdata.serial_number",
			"i18n_header" => "serial",
		],
		[
			"column" => "NoMAD.item1",
			"i18n_header" => "NoMAD.listing.item1",
		],
		[
			"column" => "NoMAD.item2",
			"i18n_header" => "NoMAD.listing.item2",
		],
				[
			"column" => "NoMAD.item3",
			"i18n_header" => "NoMAD.listing.item2",
		],
				[
			"column" => "NoMAD.item4",
			"i18n_header" => "NoMAD.listing.item2",
		],
	]
]);
