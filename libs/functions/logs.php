<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| LOGS INCLUDE
|------------------------------------------------------------------------
*/

//Error log creator
if($fra_config["logs"] != 0 && fra_var["error"] != "") {
	$fra_log_datet 		= date('Y-m-d - H:i:s');
	$fra_log_wsurl 		= "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
	$fra_log_usrip 		= $_SERVER['REMOTE_ADDR'];
	$fra_log_usrag 		= $_SERVER['HTTP_USER_AGENT'];
	$fra_log_varss 		= $_SESSION;
	$fra_log_varrq 		= $_REQUEST;
	if(fra_var["db_conn"] == 1) {
		$fra_log_dblgs 	= $fra->data->log();
		$fra_log_dberr 	= $fra->data->error();
	} else {
		$fra_log_dblgs 	= "";
		$fra_log_dberr 	= "";
	}
	$fra_log_file 		= $_SERVER['DOCUMENT_ROOT']."/logs/".date('Ymd')."_".fra_var["domain"]."_error.log";
	if(file_exists($fra_log_file)) {
		$fra_log_current = file_get_contents($fra_log_file);
	} else {
		$fra_log_current = "";
	}
	$fra_log_current   .= "". $fra_log_datet ."\n-----------------------------------------\nURL: ". $fra_log_wsurl . "\nERROR: ".print_r(fra_var["error"], true)."\nUSER: ".$fra_log_usrip."\n".$fra_log_usrag."\n\nREQUEST:\n".print_r($fra_log_varrq, true)."\nSESSIONS:\n".print_r($fra_log_varss,true)."\nDB LOGS:\n".print_r($fra_log_dblgs, true)."\nDB ERROR:\n".print_r($fra_log_dberr, true)."\n-----------------------------------------\n\n";
	file_put_contents($fra_log_file, $fra_log_current);
} 


//Generic log creator
if($fra_config["logs"] == 2) {
	$fra_log_datet 		= date('Y-m-d - H:i:s');
	$fra_log_wsurl 		= "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
	$fra_log_usrip 		= $_SERVER['REMOTE_ADDR'];
	$fra_log_usrag 		= $_SERVER['HTTP_USER_AGENT'];
	$fra_log_varss 		= $_SESSION;
	$fra_log_varrq 		= $_REQUEST;
	if(fra_var["db_conn"] == 1) {
		$fra_log_dblgs 	= $fra->data->log();
		$fra_log_dberr 	= $fra->data->error();
	} else {
		$fra_log_dblgs 	= "";
		$fra_log_dberr 	= "";
	}
	$fra_log_file 		= $_SERVER['DOCUMENT_ROOT']."/logs/".date('Ymd')."_".fra_var["domain"].".log";
	if(file_exists($fra_log_file)) {
		$fra_log_current = file_get_contents($fra_log_file);
	} else {
		$fra_log_current = "";
	}
	$fra_log_current   .= "". $fra_log_datet ."\n-----------------------------------------\nURL: ". $fra_log_wsurl . "\nUSER: ".$fra_log_usrip."\n".$fra_log_usrag."\n\nREQUEST:\n".print_r($fra_log_varrq, true)."\nSESSIONS:\n".print_r($fra_log_varss,true)."\nDB LOGS:\n".print_r($fra_log_dblgs, true)."\nDB ERROR:\n".print_r($fra_log_dberr, true)."\n-----------------------------------------\n\n";
	file_put_contents($fra_log_file, $fra_log_current);
}

