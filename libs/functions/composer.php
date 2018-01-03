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
if(!file_exists($_SERVER['DOCUMENT_ROOT']."/libs/vendors/autoload.php")) {
	fra_template("<b>FATAL ERROR!</b> You have to install dependency classes running '<i>composer update</i>' CLI.<br>If you can't use CLI or composer, you can do it manually uploading vendors classes into 'vendors/Medoo' and 'vendors/PHPMailer' folders,<br>moving 'libs/classes' folder files into 'vendors/Francesca' folder and activating alternative autoload class in vendors folder.");
}