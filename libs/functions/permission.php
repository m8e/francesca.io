<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| PERMISSION CHECK
|------------------------------------------------------------------------
*/


//Check if .htaccess exists and is Writible
if(!is_writable($_SERVER['DOCUMENT_ROOT']."/.htaccess")) {
	fra_template("<b>FATAL ERROR!</b> .htaccess is missing or not writable.");
}


//Check if Logs Folder exists and is Writible
if(!is_writable($_SERVER['DOCUMENT_ROOT']."/logs")) {
	fra_template("<b>FATAL ERROR!</b> Logs directory is missing or not writable.");
}


//Check if Temp Folder exists and is Writible
if(!is_writable($_SERVER['DOCUMENT_ROOT']."/temp")) {
	fra_template("<b>FATAL ERROR!</b> Temp directory is missing or not writable.");
}


//Check if Dev Debug File exists and is Writible
if(!is_writable($_SERVER['DOCUMENT_ROOT']."/temp/debug.dev")) {
	fra_template("<b>FATAL ERROR!</b> Debug file is missing or not writable.");
}


//Check if App Files Folder exists and is Writible
if(!is_writable($_SERVER['DOCUMENT_ROOT']."/apps/".fra_config["folder"]."/files")) {
	fra_template("<b>FATAL ERROR!</b> App Files directory is missing or not writable.");
}

