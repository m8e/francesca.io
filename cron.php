<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|
|
|------------------------------------------------------------------------
| Cron Job - cron.php
|------------------------------------------------------------------------
| If you need use schelude jobs you have to config you server cron tab
| with a minute call to this page (domain.xyz/cron.php).
| All tasks istructions will be put into respective 1m.php, 1h.php or
| 1d.php files in app tasks folder.
| Tasks pages don't use any main framework directives and functions.
|
|
*/



//GET SITE URL
$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER[HTTP_HOST];


//GET APPS DIR
$dir = $_SERVER['DOCUMENT_ROOT']."/apps/";



//EVERY MINUTE FUNCTION
if(file_exists($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1m.tmp")) {
	$fra_tasks_read = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1m.tmp");
	if($fra_tasks_read != date("i")) {
		$fra_tasks_create = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1m.tmp","w");
		fwrite($fra_tasks_create,date("i"));
		fclose($fra_tasks_create); 
		if(is_dir($dir)) { 
		    if($dh = opendir($dir)) { 
		        while(($file = readdir($dh)) !== false) { 
		            if(($file !='.')&&($file !='..')) { 
		            	if(file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".$file."/tasks/1m.php")) {
							require_once($_SERVER['DOCUMENT_ROOT']."/apps/".$file."/tasks/1m.php");
		            	}
		           	} 
		        } 
		        closedir($dh); 
		    } 
		}
	}
} else {
	$fra_tasks_create = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1m.tmp","w");
	fwrite($fra_tasks_create,date("i"));
	fclose($fra_tasks_create);
}




//EVERY HOUR FUNCTION
if(file_exists($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1h.tmp")) {
	$fra_tasks_read = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1h.tmp");
	if($fra_tasks_read != date("H")) {
		$fra_tasks_create = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1h.tmp","w");
		fwrite($fra_tasks_create,date("H"));
		fclose($fra_tasks_create);
		if(is_dir($dir)) { 
		    if($dh = opendir($dir)) { 
		        while(($file = readdir($dh)) !== false) { 
		            if(($file !='.')&&($file !='..')){ 
		            	if(file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".$file."/tasks/1h.php")) {
							require_once($_SERVER['DOCUMENT_ROOT']."/apps/".$file."/tasks/1h.php");
		            	}
		           	} 
		        } 
		        closedir($dh); 
		    } 
		}
	}
} else {
	$fra_tasks_create = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1h.tmp","w");
	fwrite($fra_tasks_create,date("H"));
	fclose($fra_tasks_create);
}





//EVERY HOUR FUNCTION
if(file_exists($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1d.tmp")) {
	$fra_tasks_read = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1d.tmp");
	if($fra_tasks_read != date("d")) {
		$fra_tasks_create = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1d.tmp","w");
		fwrite($fra_tasks_create,date("d"));
		fclose($fra_tasks_create);
		if(is_dir($dir)) { 
		    if($dh = opendir($dir)) { 
		        while(($file = readdir($dh)) !== false) { 
		            if(($file !='.')&&($file !='..')){ 
		            	if(file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".$file."/tasks/1d.php")) {
							require_once($_SERVER['DOCUMENT_ROOT']."/apps/".$file."/tasks/1d.php");
		            	}
		           	} 
		        } 
		        closedir($dh); 
		    } 
		}
	}
} else {
	$fra_tasks_create = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1d.tmp","w");
	fwrite($fra_tasks_create,date("d"));
	fclose($fra_tasks_create);
}



