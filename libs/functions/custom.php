<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| CUSTOM CONFIG INCLUDE
|------------------------------------------------------------------------
*/


//Pass some var in temporaney hard config to stop custom configs on it
$fra_hard_config["controller"] 					= $fra_config["controller"];
$fra_hard_config["action"] 						= $fra_config["action"];
$fra_hard_config["id"] 							= $fra_config["url_paths"][3];
$fra_hard_config["varj"] 						= $fra_config["url_paths"][4];
$fra_hard_config["vark"] 						= $fra_config["url_paths"][5];
$fra_hard_config["varw"] 						= $fra_config["url_paths"][6];
$fra_hard_config["varx"] 						= $fra_config["url_paths"][7];
$fra_hard_config["vary"] 						= $fra_config["url_paths"][8];
$fra_hard_config["varz"] 						= $fra_config["url_paths"][9];
$fra_hard_config["error"] 						= $fra_config["error"];


//Application custom config include
if(file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_config["folder"]."/config.php")) {
	require_once($_SERVER['DOCUMENT_ROOT']."/apps/".fra_config["folder"]."/config.php");
}


//Reconfigure hard config Vars
$fra_config["controller"] 						= $fra_hard_config["controller"];
$fra_config["action"] 							= $fra_hard_config["action"];
$fra_config["id"] 								= $fra_hard_config["id"];
$fra_config["varj"] 							= $fra_hard_config["varj"];
$fra_config["vark"] 							= $fra_hard_config["vark"];
$fra_config["varw"] 							= $fra_hard_config["varw"];
$fra_config["varx"] 							= $fra_hard_config["varx"];
$fra_config["vary"] 							= $fra_hard_config["vary"];
$fra_config["varz"] 							= $fra_hard_config["varz"];
$fra_config["error"] 							= $fra_hard_config["error"];


//Reconfigure original main config vars
$fra_config["name"] 							= fra_config["name"];
$fra_config["version"] 							= fra_config["version"];
$fra_config["folder"] 							= fra_config["folder"];
$fra_config["timezone"] 						= fra_config["timezone"];
$fra_config["logs"] 							= fra_config["logs"];
$fra_config["minify"] 							= fra_config["minify"];
$fra_config["default_controller"] 				= fra_config["default_controller"];
$fra_config["default_action"] 					= fra_config["default_action"]; 	
$fra_config["default_redirect"] 				= fra_config["default_redirect"]; 
$fra_config["error_controller"] 				= fra_config["error_controller"];
$fra_config["error_action"] 					= fra_config["error_action"];
$fra_config["error_redirect"] 					= fra_config["error_redirect"];
$fra_config["upload_allow"]						= fra_config["upload_allow"];
$fra_config["db_conn"] 							= fra_config["db_conn"];
$fra_config["db_type"] 							= fra_config["db_type"];	
$fra_config["db_file"] 							= fra_config["db_file"];	
$fra_config["db_host"] 							= fra_config["db_host"];
$fra_config["db_port"] 							= fra_config["db_port"];	
$fra_config["db_name"] 							= fra_config["db_name"];
$fra_config["db_pref"] 							= fra_config["db_pref"];	
$fra_config["db_cset"] 							= fra_config["db_cset"];
$fra_config["db_user"] 							= fra_config["db_user"];					
$fra_config["db_pass"] 							= fra_config["db_pass"];					
$fra_config["mail_debug"] 						= fra_config["mail_debug"];
$fra_config["mail_smtp_host"]					= fra_config["mail_smtp_host"];
$fra_config["mail_smtp_port"]  					= fra_config["mail_smtp_port"];
$fra_config["mail_smtp_auth"] 					= fra_config["mail_smtp_auth"];
$fra_config["mail_smtp_secure"] 				= fra_config["mail_smtp_secure"];
$fra_config["mail_user"] 						= fra_config["mail_user"];
$fra_config["mail_pass"] 						= fra_config["mail_pass"];
$fra_config["mail_from"] 						= fra_config["mail_from"];
$fra_config["mail_name"] 						= fra_config["mail_name"];
$fra_config["mail_reply"] 						= fra_config["mail_reply"];
$fra_config["ssl_mode"] 						= fra_config["ssl_mode"];
$fra_config["www_mode"] 						= fra_config["www_mode"];
$fra_config["preview_mode"] 					= fra_config["preview_mode"];
$fra_config["outofservice_mode"] 				= fra_config["outofservice_mode"];
$fra_config["golive_mode"] 						= fra_config["golive_mode"];
$fra_config["godown_mode"] 						= fra_config["godown_mode"];
$fra_config["debug_mode"] 						= fra_config["debug_mode"];
$fra_config["golive_date"] 						= fra_config["golive_date"];
$fra_config["godown_date"] 						= fra_config["godown_date"];
$fra_config["outofservice_controller"] 			= fra_config["outofservice_controller"];
$fra_config["outofservice_action"] 				= fra_config["outofservice_action"];
$fra_config["outofservice_redirect"] 			= fra_config["outofservice_redirect"];
$fra_config["golive_controller"] 				= fra_config["golive_controller"];
$fra_config["golive_action"] 					= fra_config["golive_action"];
$fra_config["golive_redirect"] 					= fra_config["golive_redirect"];
$fra_config["godown_controller"] 				= fra_config["godown_controller"];
$fra_config["godown_action"] 					= fra_config["godown_action"];
$fra_config["godown_redirect"] 					= fra_config["godown_redirect"];
$fra_config["preview_ipallow"] 					= fra_config["preview_ipallow"];
$fra_config["debug_ipallow"] 					= fra_config["debug_ipallow"];
$fra_config["debug_inierror"] 					= fra_config["debug_inierror"];

