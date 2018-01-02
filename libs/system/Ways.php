<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
*/

namespace Francesca;


Class Ways {
/*
|------------------------------------------------------------------------
| Auth Ways
|------------------------------------------------------------------------
| The Francesca/Ways is routing tools
*/
	
	public function __construct() {

	}



	function getview() {
	/* $fra->ways->getview()
	***************************************************
	| This function includes current controller/action
	| view into a layout;
	***************************************************/

		//import global core class
		global $fra;

		if(file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/views/".fra_var["controller"]."/".fra_var["action"].".php")) {
			require_once($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/views/".fra_var["controller"]."/".fra_var["action"].".php");
		}
	}



	function getsnip($name=NULL) {
	/* $fra->ways->getsnip(NAME)
	***************************************************
	| This function includes a page snippet everywehere.
	***************************************************/

		//import global core class
		global $fra;

		if(file_exists($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/snippets/".$name.".php")) {
			require_once($_SERVER['DOCUMENT_ROOT']."/apps/".fra_var["folder"]."/snippets/".$name.".php");
		}
	}

}
