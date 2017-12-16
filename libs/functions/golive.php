<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| GOLIVE MODE
|------------------------------------------------------------------------
*/


//Errors and default settings validator
if(is_numeric(fra_config["golive_mode"])) {
	if(fra_config["golive_mode"] == 0 || fra_config["golive_mode"] == 1) {
	} else {
		fra_template("<b>Error!</b> Wrong or missing 'go live mode' configuration.");
	}
	if(fra_config["golive_mode"] == 1 && !fra_datevalidation(fra_config["golive_date"])) {
		fra_template("<b>Error!</b> Wrong or missing 'go live date' configuration.");
	}
} else {
	fra_template("<b>Error!</b> Wrong or missing 'go live mode' configuration.");
}
if(fra_config["golive_redirect"] != "") {
	if(!filter_var(fra_config["golive_redirect"], FILTER_VALIDATE_URL)) {
		fra_template("<b>Error!</b> Wrong or missing 'go live redirect' configuration.");
	}
}


//Date verification and "golive" process
if (fra_config["golive_mode"] == 1 && fra_config["golive_date"] > date('Y-m-d - H:i:s')) {
	if(fra_config["preview_mode"] == 1 && in_array($_SERVER['REMOTE_ADDR'], fra_config["preview_ipallow"])) {
		//user is able to see the real website
	} else {
		if(fra_config["golive_redirect"] != "") {
			header("location: ".fra_config["golive_redirect"]);
			die();
		} else {
			$fra_config["controller"] 	= fra_config["golive_controller"];
			$fra_config["action"] 		= fra_config["golive_action"];
		}
	}
}

