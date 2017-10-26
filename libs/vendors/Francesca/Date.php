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


Class Date {
/*
|------------------------------------------------------------------------
| Date Class
|------------------------------------------------------------------------
| The Francesca/Date is a set of fuctions useful for work with dates
*/
	
	public function __construct() {

	}


	function now() {
	/* $fra->date->now()
	***************************************************
	| This function returns current datetime in
	| standard format as a string.
	***************************************************/
		return date("Y-m-d H:i:s");
	}


	function convert($date, $to = "d/m/Y", $from = "Y-m-d H:i:s") {
	/* $fra->date->convert(DATE, TO FORMAT, FROM FORMAT)
	***************************************************
	| This function converts date format using PHP
	| date() standard formats of a declared DATE, FROM
	| a format TO a new format.
	***************************************************/
	    $newdate = date_create_from_format($from, $date);
		return date_format($newdate, $to);
	}


	function days($date1=NULL, $date2=NULL) {
	/* $fra->date->days(DATE A, DATE B)
	***************************************************
	| This function returns as a string the number of
	| days beetweek two dates (better in Y-m-d format).
	***************************************************/
		$date1	=	date_create($date1);
		$date2	=	date_create($date2);
		$diff 	=	date_diff($date1,$date2);
		$diff 	=	$diff->format("%R%a");  
		$diff 	= str_replace("+", "", $diff); 
		$diff 	= str_replace("-", "", $diff);  
		return $diff;
	}


}

