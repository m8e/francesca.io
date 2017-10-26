<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| LAYOUTS / VIEWS INCLUDE
|------------------------------------------------------------------------
*/


//Application layouts or views include
if(file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/layouts/".fra_var["controller"].".php")) {
	require_once($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/layouts/".fra_var["controller"].".php");
} else {
	require_once($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/views/".fra_var["controller"]."/".fra_var["action"].".php");
}

