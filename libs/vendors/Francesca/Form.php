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


Class Form {
/*
|------------------------------------------------------------------------
| Form Class
|------------------------------------------------------------------------
| The Francesca/Form is a set of functions for form validation
*/
	
	public function __construct() {

	}


	function clean($string=NULL) {
	/* $fra->form->clean(STRING)
	***************************************************
	| This function cleans a STRING from dangerous 
	| charters.
	***************************************************/
		$string = str_replace("'", "", $string);
		$string = str_replace("|", "", $string);
		$string = str_replace("%", "", $string);
		$string = str_replace("(", "", $string);
		$string = str_replace(")", "", $string);
		$string = str_replace("<", "", $string);
		$string = str_replace(">", "", $string);
		$string = str_replace("?", "", $string);
		return $string;
	}


	function cleanlight($string=NULL) {
	/* $fra->form->cleanlight(STRING)
	***************************************************
	| This function cleans a STRING from dangerous 
	| charters (in light version).
	***************************************************/
		$string = str_replace("'", "", $string);
		$string = str_replace("|", "", $string);
		$string = str_replace("<", "", $string);
		$string = str_replace(">", "", $string);
		return $string;
	}


	function isurl($url=NULL) {
	/* $fra->form->isurl(STRING)
	***************************************************
	| This function verifies if a string is an URL
	| and returns a TRUE or FALSE value.
	***************************************************/
		if($url != "" && filter_var($url, FILTER_VALIDATE_URL)) {
			return true;
		} else {
			return false;
		}
	}


	function ismail($email=NULL) {
	/* $fra->form->ismail(STRING)
	***************************************************
	| This function verifies if a string is an E-MAIL
	| and returns a TRUE or FALSE value.
	***************************************************/
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) return false;
		elseif (!checkdnsrr(array_pop(explode('@',$email)),'MX')) return false;
		else return true;
	}


	function isnotempty($string=NULL) {
	/* $fra->form->isnotempty(STRING)
	***************************************************
	| This function verifies if a string is not empty
	| and returns a TRUE or FALSE value.
	***************************************************/
		if($string != "" || $string != NULL) {
			return true;
		} else {
			return false;
		}
	}


	function isnumber($string=NULL) {
	/* $fra->form->isanumber(STRING)
	***************************************************
	| This function verifies if a string is a number
	| and returns a TRUE or FALSE value.
	***************************************************/
		if(is_numeric($string)) {
			return true;
		} else {
			return false;
		}
	}


	function ispresent($string=NULL, $word=NULL) {
	/* $fra->form->ispresent(STRING, WORD)
	***************************************************
	| This function verifies if in a STRING there is
	| one (or more) WORD returning TRUE or FALSE value.
	***************************************************/
		if(!strpos($string, $word)) {
			return false;
		} else {
			return true;
		}
	}


	function ismore($string=NULL, $long=NULL) {
	/* $fra->form->ismore(STRING, LONG)
	***************************************************
	| This function verifies if a STRING is minium LONG
	| and returns TRUE or FALSE value.
	***************************************************/
		if(strlen($string) > $long) {
			return true;
		} else {
			return false;
		}
	}


	function ismax($string=NULL, $long=NULL) {
	/* $fra->form->ismax(STRING, LONG)
	***************************************************
	| This function verifies if a STRING is maxium LONG
	| and returns TRUE or FALSE value.
	***************************************************/
		if(strlen($string) <= $long) {
			return true;
		} else {
			return false;
		}
	}



}