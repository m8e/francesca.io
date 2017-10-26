<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| CONTROLLERS INCLUDE
|------------------------------------------------------------------------
*/


//Application controllers include
if(file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/controllers/".fra_var["controller"].".php")) {
	require_once($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/controllers/".fra_var["controller"].".php");
}

