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


Class Http {
/*
|------------------------------------------------------------------------
| Http Class
|------------------------------------------------------------------------
| The Francesca/Http class manages all HTTP GET, POST, PUT, DELETE reqs.
*/

	public function __construct() {

	}




//////////////////////////////////////////////////////////////////////////////////////////////////////////////* API *///////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	function to($method="GET", $url=NULL, $data=NULL, $header="array('Content-Type: application/json')") {
	/* $fra->http->to(METHOD, URL, DATA, HEADER)
	***************************************************
	| This function sends DATA (array) to an URL
	| with a custom HEADER (array) trough a METHOD. 
	***************************************************/
		if($method != "" && $url != "" && filter_var($url, FILTER_VALIDATE_URL) && $data != "" && is_array($data)) {
			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
			curl_setopt($curl, CURLOPT_HEADER, false);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
			curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
			$response = curl_exec($curl);
		} else {
			$response["error"] = "Missing or wrong format send vars";	
		}
		return $response;
	}



	function from($method=NULL, $ip=NULL) {
	/* $fra->http->from(METHOD, IP)
	***************************************************
	| This function receives data trasmitted to page
	| in a determinated METHOD from an optional list
	| of IP (array or string).
	***************************************************/
		if($ip != NULL) {
			//sender IP define
			if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
				$sendip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$sendip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
				$sendip = $_SERVER['REMOTE_ADDR'];
			}
			if(is_array($ip) && in_array($sendip, $ip)) { 
				$auth = true;
			} else {
				if($sendip == $ip) {
					$auth = true;
				} else {
						$auth = false;
				}
			}	
		} else {
			$auth = true;
		}
		if($auth) {
			switch($_SERVER['REQUEST_METHOD']) {
				case "PUT":
					if($method == "PUT") {
						parse_str(file_get_contents("php://input"),$output);
					}
				break;
				case "POST":
					if($method == "POST") {
						parse_str(file_get_contents("php://input"),$output);
					}
				break;
				case "GET":
					if($method == "GET") {
						parse_str(file_get_contents("php://input"),$output);
					}
				break;
				case "DELETE":
					if($method == "DELETE") {
						parse_str(file_get_contents("php://input"),$output);
					}
				break;
				default:
					$output["error"] = "HTTP method not supported";
				break;
			}
		} else {
			$output["error"] = "Access denied for ".$sendip;	
		}
		if($output == "") {
			$output["error"] = "Request undefined"; 
		}
		return $output;

	}





//////////////////////////////////////////////////////////////////////////////////////////////////////////* HEADERS *///////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	function response($code=NULL) {
	/* $fra->http->response(CODE)
	***************************************************
	| This function returns a custom CODE header.
	***************************************************/
		if($code != NULL && is_numeric($code)) {
			header("HTTP/1.0 ".$code." Francesca Framework");		 
		} else {
			return false;
		}
	}



	function responseget($url=NULL) {
	/* $fra->http->responseget(URL)
	***************************************************
	| This function gets and returns an URL header.
	***************************************************/
		if($url != NULL && filter_var($url, FILTER_VALIDATE_URL)) {
  			file_get_contents($url);
  			$response = $http_response_header;
  			return $response[0];
		} else {
			return false;
		}
	}



}

