<?php


/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| CRON ENGINE
|------------------------------------------------------------------------
*/




//EVERY MINUTE FUNCTION
if(file_exists($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1m-".fra_var["folder"].".tmp")) {
	$fra_tasks_read = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1m-".fra_var["folder"].".tmp");
	if($fra_tasks_read != date("i")) {
		$fra_tasks_create = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1m-".fra_var["folder"].".tmp","w");
		fwrite($fra_tasks_create,date("i"));
		fclose($fra_tasks_create);	
    	if(file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/tasks/1m.php")) {
			require_once($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/tasks/1m.php");
    	}
	}
} else {
	$fra_tasks_create = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1m-".fra_var["folder"].".tmp","w");
	fwrite($fra_tasks_create,date("i"));
	fclose($fra_tasks_create);
}




//EVERY HOUR FUNCTION
if(file_exists($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1h-".fra_var["folder"].".tmp")) {
	$fra_tasks_read = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1h-".fra_var["folder"].".tmp");
	if($fra_tasks_read != date("H")) {
		$fra_tasks_create = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1h-".fra_var["folder"].".tmp","w");
		fwrite($fra_tasks_create,date("H"));
		fclose($fra_tasks_create);
        	if(file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/tasks/1h.php")) {
				require_once($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/tasks/1h.php");
        	}
		}
} else {
	$fra_tasks_create = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1h-".fra_var["folder"].".tmp","w");
	fwrite($fra_tasks_create,date("H"));
	fclose($fra_tasks_create);
}





//EVERY HOUR FUNCTION
if(file_exists($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1d-".fra_var["folder"].".tmp")) {
	$fra_tasks_read = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1d-".fra_var["folder"].".tmp");
	if($fra_tasks_read != date("d")) {
		$fra_tasks_create = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1d-".fra_var["folder"].".tmp","w");
		fwrite($fra_tasks_create,date("d"));
		fclose($fra_tasks_create);
    	if(file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/tasks/1d.php")) {
			require_once($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/tasks/1d.php");
    	}
	}
} else {
	$fra_tasks_create = fopen($_SERVER['DOCUMENT_ROOT']."/temp/fra_cron_1d-".fra_var["folder"].".tmp","w");
	fwrite($fra_tasks_create,date("d"));
	fclose($fra_tasks_create);
}
