<?php

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| FRAMEWORK UTILITIES FUNCTION
|------------------------------------------------------------------------
*/


//Minimize Output Function
function fra_minify($buffer) {
    $search = array(
        '/\>[^\S ]+/s',
        '/[^\S ]+\</s',
        '/(\s)+/s',
        '/<!--(.|\s)*?-->/'
    );
    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}


//Date Validation Function
function fra_datevalidation($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}
