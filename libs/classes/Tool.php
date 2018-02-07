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


Class Tool {
/*
|------------------------------------------------------------------------
| Auth Tool
|------------------------------------------------------------------------
| The Francesca/Tool is a set of generic tools
*/
	
	public function __construct() {

	}






///////////////////////////////////////////////////////////////////////////////////////////////////////* GENERIC TOOLS *////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



	function exceptions($exceptions=NULL, $var=fra_var["controller"]) {
	/* $fra->tool->exceptions(EXCEPTIONS, VAR)
	***************************************************
	| This functions verifies if still one value of an
	| "expentions" array is like a selected var and
	| returns TRUE/FALSE.
	***************************************************/
		if(!is_array($exceptions)) {
			$exceptions = Array($exceptions);
		}

		$result = FALSE;
		foreach ($exceptions as $exception) {
			if($var == $exception) {
				$result = TRUE;
				break;
			}
		}
		return $result;
	}




	function combinations($arrays=Array(), $i=0) {
	/* $fra->tool->combinations(ARRAYS)
	***************************************************
	| This functions takes an array of arrays and
	| combines them into a multi-array matrix.
	***************************************************/
		if (!isset($arrays[$i])) {
                return array();
            }
            if ($i == count($arrays) - 1) {
                return $arrays[$i];
            }

            $tmp = $this->combinations($arrays, $i + 1);

            $result = array();

            foreach ($arrays[$i] as $v) {
                foreach ($tmp as $t) {
                    $result[] = is_array($t) ? 
                        array_merge(array($v), $t) :
                        array($v, $t);
                }
            }

        return $result;
	}




///////////////////////////////////////////////////////////////////////////////////////////////////////* CUSTOM LOGS *///////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	function logit($data=NULL, $name="custom_log") {
	/* $fra->tool->logit(DATA, NAME)
	***************************************************
	| This function lets you log everything with a 
	| custom name and a custom array of data.
	***************************************************/
		if(!is_array($data)) {
			$data = Array($data);
		}

		$fra_log_datet 		= date('Y-m-d - H:i:s');
		$fra_log_wsurl 		= "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
		$fra_log_usrip 		= $_SERVER['REMOTE_ADDR'];
		$fra_log_usrag 		= $_SERVER['HTTP_USER_AGENT'];
		$fra_log_varss 		= $_SESSION;
		$fra_log_varrq 		= $_REQUEST;
		if(fra_var["db_conn"] == 1) {
			$fra_log_dblgs 	= $fra->data->log();
			$fra_log_dberr 	= $fra->data->error();
		} else {
			$fra_log_dblgs 	= "";
			$fra_log_dberr 	= "";
		}
		$fra_log_file 		= $_SERVER['DOCUMENT_ROOT']."/logs/".date('Ymd')."_".fra_var["domain"]."_".$name.".log";
		if(file_exists($fra_log_file)) {
			$fra_log_current = file_get_contents($fra_log_file);
		} else {
			$fra_log_current = "";
		}
		$fra_log_current   .= "". $fra_log_datet ."\n-----------------------------------------\nURL: ". $fra_log_wsurl . "\nUSER: ".$fra_log_usrip."\n".$fra_log_usrag."\n\nCUSTOM DATA:\n".print_r($data, true)."\nREQUEST:\n".print_r($fra_log_varrq, true)."\nSESSIONS:\n".print_r($fra_log_varss,true)."\nDB LOGS:\n".print_r($fra_log_dblgs, true)."\nDB ERROR:\n".print_r($fra_log_dberr, true)."\n-----------------------------------------\n\n";
		file_put_contents($fra_log_file, $fra_log_current);
	}





	function logitlight($data=NULL, $name="custom_log") {
	/* $fra->tool->logitlight(DATA, NAME)
	***************************************************
	| This function lets you log a custom array of data
	| with a custom name.
	***************************************************/
		if(!is_array($data)) {
			$data = Array($data);
		}

		$fra_log_datet 		= date('Y-m-d - H:i:s');
		$fra_log_wsurl 		= "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
		$fra_log_file 		= $_SERVER['DOCUMENT_ROOT']."/logs/".date('Ymd')."_".fra_var["domain"]."_".$name."_light.log";
		if(file_exists($fra_log_file)) {
			$fra_log_current = file_get_contents($fra_log_file);
		} else {
			$fra_log_current = "";
		}
		$fra_log_current   .= "". $fra_log_datet ."\n-----------------------------------------\nURL: ". $fra_log_wsurl . "\n\nCUSTOM DATA:\n".print_r($data, true)."\n-----------------------------------------\n\n";
		file_put_contents($fra_log_file, $fra_log_current);
	}


///////////////////////////////////////////////////////////////////////////////////////////////////////////* NET *//////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	function isonline($url=NULL) {
	/* $fra->tool->isonline(URL)
	***************************************************
	| This function checks if an URL is or not on-line
	| and returns TRUE or FALSE value.
	***************************************************/
		if($url != "" && filter_var($url, FILTER_VALIDATE_URL)) {
			$curlInit = curl_init($url);
			curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
			curl_setopt($curlInit,CURLOPT_HEADER,true);
			curl_setopt($curlInit,CURLOPT_NOBODY,true);
			curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);
			$response = curl_exec($curlInit);
			curl_close($curlInit);
			if($response) {
				return true;
			} else {
				return false;
			}
		}
	}


	function redirect($url=NULL) {
	/* $fra->tool->redirect(URL)
	***************************************************
	| This function redirects to an URL.
	***************************************************/
		if($url != "" && filter_var($url, FILTER_VALIDATE_URL)) {
			if(headers_sent()) {
			    die("<script>window.location.href = '".$url."';</script>");
			}
			else{
			    die(header("location: ".$url));
			}
		} else {
			return false;
		}
	}





//////////////////////////////////////////////////////////////////////////////////////////////////////////* JSON *//////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function jsontoarray($json=NULL) {
	/* $fra->tool->jsontoarray(JSON)
	***************************************************
	| This function returns an array from a JSON
	***************************************************/
		$jsontoarray = json_decode($json);
		if(json_last_error() === JSON_ERROR_NONE) {
			return $jsontoarray;
		} else {
			return json_last_error();
		}

	}


	public function jsonfromarray($array=NULL) {
	/* $fra->tool->jsonfromarray(ARRAY)
	***************************************************
	| This function returns a JSON from an ARRAY
	***************************************************/
		if(is_array($array)) {
			return json_encode($array);
		} else {
			return false;
		}

	}







///////////////////////////////////////////////////////////////////////////////////////////////////////* SESSION *//////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function sessionset($vars=NULL) {
	/* $fra->tool->sessionset(VARS)
	***************************************************
	| This function adds an array of vars to session.
	***************************************************/
		if(is_array($vars)) {
			foreach ($vars as $key => $val) {
			    $_SESSION["".$key.""] = "".$val."";
			}
			return true;
		} else {
			return false;
		}

	}


	public function sessionread($var=NULL) {
	/* $fra->tool->sessionread(VAR)
	***************************************************
	| This function returns a VAR session value.
	***************************************************/
		if($var != "") {
			return $_SESSION["".$var.""];
		} else {
			return false;
		}

	}







///////////////////////////////////////////////////////////////////////////////////////////////////////* COOKIES *//////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function cookieset($name="test", $value="", $time=3600) {
	/* $fra->tool->cookieset(NAME, VALUE, TIME)
	***************************************************
	| This function sets a cookie with a NAME, a VALUE
	| and a TIME in second (ex. 86400 -> 1day,
	| 3600 -> 1h, ...).
	***************************************************/
		setcookie($name, $value, time() + $time, "/");
		return true;

	}


	public function cookieread($name=NULL) {
	/* $fra->tool->cookieread(NAME)
	***************************************************
	| This function returns a cookie value.
	***************************************************/
		if(isset($_COOKIE["".$name.""])) {
			return $_COOKIE["".$name.""];
		} else {
			return false;
		}

	}










//////////////////////////////////////////////////////////////////////////////////////////////////* ENCRYPT/DECRYPT *///////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	function encrypt($string=NULL, $key="francesca") {
	/* $fra->tool->encryot(STRING, KEY)
	***************************************************
	| This function encrypts a STRING with a KEY.
	***************************************************/
		if($string != NULL && $key != NULL) {
		    return openssl_encrypt($string,"AES-128-ECB",$key);
		} else {
			return false;
		}
	}


	function decrypt($string=NULL, $key="francesca") {
	/* $fra->tool->decrypt(STRING, KEY)
	***************************************************
	| This function decrypts a STRING with a KEY.
	***************************************************/
		if($string != NULL && $key != NULL) {
		    return openssl_decrypt($string,"AES-128-ECB",$key);
		} else {
			return false;
		}
	}



///////////////////////////////////////////////////////////////////////////////////////////////////////* GENERATORS *///////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	function password($l=12) {
	/* $fra->tool->password(LENGHT)
	***************************************************
	| This function returns a LENGHT password.
	***************************************************/
	    $alphabet = '1234567890abcdefghijklmnopqrstuvwxyz=#@+-_?!$%&*()[]ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $pass = array();
	    $alphaLength = strlen($alphabet) - 1;
	    for ($i = 0; $i < $l; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
	    }
	    return implode($pass);
	}





	function code($l=10) {
	/* $fra->tool->code(LENGHT)
	***************************************************
	| This function returns a LENGHT code.
	***************************************************/
	    $alphabet = '1234567890abcdefghijklmnopqrstuvwxyz-_ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $pass = array();
	    $alphaLength = strlen($alphabet) - 1;
	    for ($i = 0; $i < $l; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
	    }
	    return implode($pass);
	}




	function coden($l=6) {
	/* $fra->tool->coden(LENGHT)
	***************************************************
	| This function returns a LENGHT numeric code.
	***************************************************/
	    $alphabet = '1234567890';
	    $pass = array();
	    $alphaLength = strlen($alphabet) - 1;
	    for ($i = 0; $i < $l; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
	    }
	    return implode($pass);
	}




	function codean($l=8) {
	/* $fra->tool->codean(LENGHT)
	***************************************************
	| This function returns a LENGHT alfanumeric code.
	***************************************************/
	    $alphabet = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $pass = array();
	    $alphaLength = strlen($alphabet) - 1;
	    for ($i = 0; $i < $l; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
	    }
	    return implode($pass);
	}




	function unique() {
	/* $fra->tool->unique()
	***************************************************
	| This function returns an unique code.
	***************************************************/
	    return uniqid();
	}




	function string() {
	/* $fra->tool->string()
	***************************************************
	| This function returns an unique string.
	***************************************************/
	    return md5(uniqid()."-".microtime());
	}




}
