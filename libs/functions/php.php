<?php 

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| PHP VERSION CHECK
|------------------------------------------------------------------------
*/


//Chek PHP Version
$fra_php_version = substr(phpversion(), 0, 1);
if($fra_php_version < 7) {
	fra_template("<b>FATAL ERROR!</b> Francesca Framework require PHP 7 or major version and you are running PHP version: ".phpversion());
}

