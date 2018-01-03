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


Class Auth {
/*
|------------------------------------------------------------------------
| Auth Class
|------------------------------------------------------------------------
| The Francesca/Auth
*/
	
	public function __construct() {

	}



///////////////////////////////////////////////////////////////////////////////////////////////////////////* PASSWORD */////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function passwordhash($pass=NULL) {
	/* $fra->auth->passwordhash(SECRET PASS)
	***************************************************
	| This function creates an encrypted
	| password based on BCRYPT algorit
	| and return it as a string.
	***************************************************/
		if($pass != "") {
			return password_hash($pass, PASSWORD_BCRYPT);
		} else {
			return false;
		}
	}


	public function passwordcheck($pass=NULL, $hash=NULL) {
	/* $fra->auth->passwordcheck(SECRET PASS, PASS HASH)
	***************************************************
	| This function validates a BCRYPT encrypt
	| password and return a TRUE or FALSE value.
	***************************************************/
		if($pass != "" && $hash != "" && password_verify($pass, $hash)) {
   			return true;
		} else {
			return false;
		}
	}




///////////////////////////////////////////////////////////////////////////////////////////////////////* TOKEN MANGER */////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function tokengenerate() {
	/* $fra->auth->tokengenerate()
	***************************************************
	| This function creates an univoque
	| token, puts it in "fra_auth_token"
	| server session and return it into
	| a string.
	***************************************************/
		$token = sha1(microtime()."-".$_SERVER['REMOTE_ADDR']."-".uniqid()."@".$_SERVER['REQUEST_URI']);
		$_SESSION["fra_auth_token"] = $token;
		return $token;
	}


	public function tokenverify($token=NULL) {
	/* $fra->auth->tokenverify(INPUT TOKEN)
	***************************************************
	| This function verify the input token with
	| the "fra_auth_token" session and return
	| a TRUE or FALSE value. This function manages
	| also "fra_auth_session_token" and
	| "fra_auth_session_try".
	***************************************************/
		$token = str_replace("'", "", $token);
		$token = str_replace("|", "", $token);
		$token = str_replace("<", "", $token);
		$token = str_replace(">", "", $token);
		if(isset($_SESSION["fra_auth_token"]) && $_SESSION["fra_auth_token"] != "" && $token != "" && parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == $_SERVER['SERVER_NAME'] && $_SESSION["fra_auth_token"] == $token) {
			$_SESSION["fra_auth_session_token"] = $token;
			$_SESSION["fra_auth_session_try"] = "";
			$_SESSION["fra_auth_token"] = "";
			return true;
		} else {
			$_SESSION["fra_auth_session_token"] = "";
			$_SESSION["fra_auth_session_try"] = "";
			$_SESSION["fra_auth_token"] = "";
			return false;
		}
	}




////////////////////////////////////////////////////////////////////////////////////////////////////////////* OTP TFA */////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	public function otpgenerate() {
	/* $fra->auth->otpgenerate()
	***************************************************
	| This function creates an temporaney
	| otp code, puts it into a "fra_auth_otp"
	| server session and return it as a string.
	***************************************************/
		$otp = crc32(microtime()."-".$_SERVER['REMOTE_ADDR']."-".uniqid()."@".$_SERVER['REQUEST_URI']);
		$otp = substr($otp, 0, 6);
		$_SESSION["fra_auth_otp"] = $otp;
		return $otp;
	}


	public function otpverify($otp=NULL) {
	/* $fra->auth->otp_verify(INPUT OTP)
	***************************************************
	| This function verify the input opt with the
	| "fra_auth_otp" and return TRUE or FALSE
	***************************************************/
		$otp = str_replace("'", "", $otp);
		$otp = str_replace("|", "", $otp);
		$otp = str_replace("<", "", $otp);
		$otp = str_replace(">", "", $otp);
		if(isset($_SESSION["fra_auth_otp"]) && $_SESSION["fra_auth_otp"] != "" && $otp != "" && $_SESSION["fra_auth_otp"] == $otp) {
			return true;
		} else {
			return false;
		}
	}





///////////////////////////////////////////////////////////////////////////////////////////////////////* AUTH SESSION */////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	public function start($level=NULL) {
	/* $fra->auth->start(LEVEL)
	***************************************************
	| This function start a login session and 
	| set an optional user level identify by
	| a number putting all in 2 sessions:
	| "fra_auth_session" and "fra_auth_level".
	***************************************************/
		$session_generate = sha1($_SERVER['REMOTE_ADDR']."@".$_SERVER['SERVER_NAME']."_".$_SESSION["fra_auth_session_token"]);
		$_SESSION["fra_auth_session"] = $session_generate;
		if($level != NULL && is_numeric($level)) {
			$_SESSION["fra_auth_level"] = $level;
		}
		if(isset($_SESSION["fra_auth_session"]) && $_SESSION["fra_auth_session"] == $session_generate && $_SESSION["fra_auth_session"] != "") {
			return true;
		} else {
			$_SESSION["fra_auth_session_token"] = "";
			return false;
		}
	}


	public function verify($level=NULL) {
	/* $fra->auth->verify(LEVEL)
	***************************************************
	| This function validates user session
	| and user level (optional) returning
	| a TRUE or FALSE value.
	***************************************************/
		$session_regenerate = sha1($_SERVER['REMOTE_ADDR']."@".$_SERVER['SERVER_NAME']."_".$_SESSION["fra_auth_session_token"]);
		if(isset($_SESSION["fra_auth_session"]) && $_SESSION["fra_auth_session"] == $session_regenerate && $_SESSION["fra_auth_session"] != "") {
				if($level != NULL && is_numeric($level) && isset($_SESSION["fra_auth_level"]) && $_SESSION["fra_auth_level"] == $level && $_SESSION["fra_auth_level"] != "") {
					return true;
				} else {
					return false;
				}
		} else {
			$_SESSION["fra_auth_session_token"] = "";
			$_SESSION["fra_auth_session"] = "";
			$_SESSION["fra_auth_level"] = "";
			return false;
		}
	}


	public function stop() {
	/* $fra->auth->stop()
	***************************************************
	| This function stops all user sessions.
	***************************************************/
		session_unset();
    	session_destroy();
    	return true;
	}



	public function level() {
	/* $fra->auth->level()
	***************************************************
	| This function returns user level into a string
	***************************************************/
		if(isset($_SESSION["fra_auth_level"]) && $_SESSION["fra_auth_level"] != "" && is_numeric($_SESSION["fra_auth_level"])) {
			return $_SESSION["fra_auth_level"];
		} else {
			return false;
		}
	}




///////////////////////////////////////////////////////////////////////////////////////////////////* AUTH TRY SESSION */////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	public function try($number=1) {
	/* $fra->auth->try(VALUE NUMBER)
	***************************************************
	| This function adds a VALUE NUMBER to user
	| try session.
	***************************************************/
		if(!isset($_SESSION["fra_auth_session_try"]) || !is_numeric($_SESSION["fra_auth_session_try"]) || $_SESSION["fra_auth_session_try"] < 0 || $_SESSION["fra_auth_session_try"] == "") {
			$_SESSION["fra_auth_session_try"] = $number;
		} else {
			$_SESSION["fra_auth_session_try"] = $_SESSION["fra_auth_session_try"] + $number;
		}

	}


	public function tryverify($max=3) {
	/* $fra->auth->tryverify(MAX NUMBER)
	***************************************************
	| This funcion verifies if max value of session try
	| is equal to current user session try value and
	| return TRUE or FALSE value.
	***************************************************/
		if(isset($_SESSION["fra_auth_session_try"]) && is_numeric($_SESSION["fra_auth_session_try"]) && $_SESSION["fra_auth_session_try"] > $max) {
			return true;
		} else {
			return false;
		}

	}




}