<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| .COMPOSER CHECKER
|------------------------------------------------------------------------
*/



//Check autoloader
if(!file_exists($_SERVER['DOCUMENT_ROOT']."/libs/vendors/autoload.php") || !file_exists($_SERVER['DOCUMENT_ROOT']."/composer.lock")) {
	fra_template("<b>FATAL ERROR!</b> You have to run '<i>composer update</i>' CLI to install dependences and generate autoload class.");
}