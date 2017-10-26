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


Class Text {
/*
|------------------------------------------------------------------------
| Text Class
|------------------------------------------------------------------------
| The Francesca/Text is a set of fuctions useful for work with text
*/
	
	public function __construct() {

	}


	function replace($text=NULL, $search =NULL, $replace=NULL) {
	/* $fra->text->replace(TEXT, STRING, NEWSTRING)
	***************************************************
	| This function replaces a STRING with a new STRING
	| into a TEXT.
	***************************************************/
	    return str_replace($search, $replace, $text);
	}


	function length($string=NULL) {
	/* $fra->text->length(STRING)
	***************************************************
	| This function returns the length of a string.
	***************************************************/
		return strlen($string);
	}


	function left($string=NULL, $chars=NULL) {
	/* $fra->text->left(STRING, CHARS)
	***************************************************
	| This function returns first CHARS of a STRING.
	***************************************************/
		return substr($string, 0, $chars);
	}


	function right($string=NULL, $chars=NULL) {
	/* $fra->text->right(STRING, CHARS)
	***************************************************
	| This function returns last CHARS of a STRING.
	***************************************************/
		return substr($string, -$chars, $chars);
	}


	function lefttrim($string=NULL, $chars=NULL) {
	/* $fra->text->lefttrim(STRING, CHARS)
	***************************************************
	| This function trims first CHARS of a STRING.
	***************************************************/
		return substr($string, $chars);
	}


	function righttrim($string=NULL, $chars=NULL) {
	/* $fra->text->righttrim(STRING, CHARS)
	***************************************************
	| This function trims last CHARS of a STRING.
	***************************************************/
		return substr($string, 0, strlen($string)-$chars);
	}


	function truncate($text=NULL, $chars=25, $end="...") {
	/* $fra->text->truncate(STRING, CHARS, END)
	***************************************************
	| This function truncates a string at a CHARS n°
	| of letters and appends an end (ex. ...).
	***************************************************/
	    $text = $text." ";
	    $text = substr($text,0,$chars);
	    $text = substr($text,0,strrpos($text,' '));
	    $text = $text.$end;
	    return $text;
	}


	function reverse($text=NULL) {
	/* $fra->text->reverse(STRING)
	***************************************************
	| This function returns a reversed STRING.
	***************************************************/
	    return strrev($text);
	}


	function uppercase($text=NULL) {
	/* $fra->text->uppercase(STRING)
	***************************************************
	| This function returns an uppercase STRING.
	***************************************************/
	    return strtoupper($text);
	}


	function lowercase($text=NULL) {
	/* $fra->text->lowercase(STRING)
	***************************************************
	| This function returns an lowercase STRING.
	***************************************************/
	    return strtolower($text);
	}


	function capitalize($text=NULL, $mode=0) {
	/* $fra->text->capitalize(STRING, OPTION)
	***************************************************
	| This function returns a capitalize STRING (opt. 0)
	| or a full words capitalize STRING (opt. 1).
	***************************************************/
	    if($mode == 1) {
	    	return ucwords($text);
	    } else {
	    	return ucfirst($text);
	    }
	}


	function wrap($text=NULL, $chars=20, $tag="<br>") {
	/* $fra->text->wrap(STRING, CHARS, TAG)
	***************************************************
	| This function inserts a TAG every CHARS in STRING. 
	***************************************************/
		return wordwrap($text, $chars, $tag);
	}


	function words($text=NULL) {
	/* $fra->text->words(STRING)
	***************************************************
	| This function counts words in STRING. 
	***************************************************/
		return str_word_count($text);
	}


	function tobr($text=NULL) {
	/* $fra->text->tobr(STRING)
	***************************************************
	| This function returns STRING \n into <br>.
	***************************************************/
		return nl2br($text);
	}


	function frombr($text=NULL) {
	/* $fra->text->frombr(STRING)
	***************************************************
	| This function returns STRING <br> into \n.
	***************************************************/
		return str_replace("<br>", "\n", $text);
	}


	function slug($str=NULL, $delimiter="-"){
	/* $fra->text->slug(STRING, DELIMITER)
	***************************************************
	| This function returns a SLUG from a STRING
	| using a DELIMITER.
	***************************************************/
    	$slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
    	return $slug;
	} 


}

