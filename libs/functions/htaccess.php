<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| .HTACCESS MANAGER
|------------------------------------------------------------------------
*/



//Error check
$fra_source_content = file_get_contents($_SERVER['DOCUMENT_ROOT']."/libs/functions/htaccess_source.php");
$fra_current_content = file_get_contents($_SERVER['DOCUMENT_ROOT']."/.htaccess");

if(!strpos($fra_current_content, $fra_source_content)) {
	die("<b>FATAL ERROR!</b> .htaccess does not include Francesca Framework directive or they are corrupt.");
}