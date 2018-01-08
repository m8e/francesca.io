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


	function change($date=fra_var["current_date"], $request="+1 day", $format="Y-m-d") {
	/* $fra->date->change(DATE, REQUEST, FORMAT)
	***************************************************
	| This function returns as a string a new date 
	! based on an original date and based on a request.
	***************************************************/
		return date($format, strtotime($date ." ". $request));
	}


	function avaibility($start=NULL, $end=NULL, $datas=Array(), $quantity=1) {
	/* $fra->date->avaibility(START, END, DATAS, QUANTITY)
	***************************************************
	| This function checks the avaibility of a quantity
	| of any entity into a date range comparing it with
	| an array of preventived "blocked" dates returning
	| an array of IDs that are in conflict with request
	| date range.
	|
	| Datas array in this format:
	| $datas = Array(
	|	Array(ID, "YYYY-MM-DD - HH:mm", "YYYY-MM-DD - HH:mm", RESERVED, TOTAL),
	|	Array(ID, "YYYY-MM-DD - HH:mm", "YYYY-MM-DD - HH:mm", RESERVED, TOTAL),
	|	Array(ID, "YYYY-MM-DD - HH:mm", "YYYY-MM-DD - HH:mm", RESERVED, TOTAL)
	|	);
	|
	| Datas can be a db query result.
	|
	***************************************************/
		if(is_array($datas)) {

			$key = 0;
			$ids = Array();

			foreach($datas as $data) {

				//VARS RESET
				$dataid 		= NULL;
				$datastart 		= NULL;
				$dataend 		= NULL;
				$datareserved 	= NULL;
				$datatotal		= NULL;

				//VARS ASSIGN
				$dataid 		= $data[0];
				$datastart 		= $data[1];
				$dataend 		= $data[2];
				$datareserved 	= $data[3];
				$datatotal		= $data[4];

				$dataquantity   = $quantity; 

				//NULL CHECK
				if($dataquantity == NULL) {
					$dataquantity = 1;
				}
				if($datareserved == NULL) {
					$datareserved = 0;
				}
				if($datatotal == NULL) {
					$datatotal = 1;
				}

				//REQUEST QUANTITY
				$requestqnt		= $dataquantity + $datareserved;

				//QUANTITY DIFFERENCE
				$requestdiff	= $datatotal - $requestqnt;
				
				//RECORD CREATE
				$recorddata = Array(
					"id" => $dataid,
					"start" => $datastart,
					"end" => $dataend,
					"total" => $datatotal,
					"reserved" => $datareserved,
					"avaible" => $requestdiff
				);

				if($datastart >= $start) {
					
					if($datastart >= $end) {

						//NO ACTION HERE

					} else {

						if($requestqnt > $datatotal) {
							array_push($ids, $recorddata);
							}

					}

				} else {
					if($dataend > $start) {

						if($requestqnt > $datatotal) {
							array_push($ids, $recorddata);
							}

					}
				}
			
			$key += $key;

			}	

				//OUTPUT RESULTS
				return $ids;

		} else {

				return FALSE;

		}
	}


}

