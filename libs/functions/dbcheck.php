<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| DB CONNECTION TEST
|------------------------------------------------------------------------
*/


//DB Connection Test and Errors
if(fra_var["db_conn"] == 1) {
	$fra_db_types = Array("mysql", "sqlite");
	if(is_numeric(fra_var["db_conn"]) && in_array(fra_var["db_type"], $fra_db_types)) {
		if(fra_var["db_type"] == "sqlite" && !is_writable(fra_var["db_file"])) {
				fra_template("<b>Error!</b> Database Connection Error: <i>sqlite database file not found or not writable in '".fra_var["db_file"]. "'</i>.");
		}
		if(fra_var["db_type"] == "mysql") { 
			if(fra_var["db_port"] != "") {
				$fra_var_db_host = ":".fra_var["db_port"];
			} else {
				$fra_var_db_host = "";
			}
			$fra_var_db_host = fra_var["db_host"]."".$fra_var_db_host;
			$fra_con = mysqli_connect($fra_var_db_host,fra_var["db_user"],fra_var["db_pass"],fra_var["db_name"]);
			if(mysqli_connect_error()) {
				fra_template("<b>Error!</b> Database Connection Error: <i>".mysqli_connect_error(). "</i>");
			}
		}
	} else {
		fra_template("<b>Error!</b> Wrong or missing 'db conn' configuration.");
	}
}

