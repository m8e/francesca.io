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
| If you need use schelude jobs you have to config your server cron tab
| with "* * * * * php /pathto/cron.php domain.xyz".
|
| You can call it also by URL using "domain.xyz/cron.php" HTTP requests.
|
| All tasks istructions will be put into respective 1m.php, 1h.php or
| 1d.php files in app tasks folder.
|
*/



//CLI CHECK
if(php_sapi_name() == "cli" || strpos(php_sapi_name(), "cgi") != TRUE) {

	//FRANCESCA.IO FRAMEWORK CLI-TASKS SCRIPT INCLUDE
	require(__DIR__ ."/libs/functions/croncli.php");

} else {

	//FRANCESCA.IO FRAMEWORK TASKS SCRIPT INCLUDE
	require_once($_SERVER['DOCUMENT_ROOT']."/libs/tasks.php");

}

