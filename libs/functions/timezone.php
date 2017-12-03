<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| SET GLOBAL TIMEZONE
|------------------------------------------------------------------------
*/


//Errors and default settings validator
if($fra_config["timezone"] == "") {
	$fra_config["timezone"] == "UTC";
} else {
	if(!in_array($fra_config["timezone"], DateTimeZone::listIdentifiers(DateTimeZone::ALL), true)) {
		die("<b>Error!</b> Wrong or missing 'time zone' configuration.");
	}
}


//Global timezone setup
date_default_timezone_set(fra_config["timezone"]);

//current date
$fra_config["current_date"] = date("Y-m-d");

//current time
$fra_config["current_time"] = date("H:i:s");

