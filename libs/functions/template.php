<?php 

/*
| Francesca Framework
| https://francesca.io
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|------------------------------------------------------------------------
| DEFAULT TEMPLATE FUNCTION
|------------------------------------------------------------------------
*/


function fra_template($text="") {

    //build template
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '    <title>Francesca Framework</title>';
    echo '    <meta charset="utf-8"/>';
    echo '    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">';
    echo '    <style>';
    echo '        body { ';
    echo '            margin: 0; ';
    echo '            padding: 0; ';
    echo '            font-family: "Open Sans", sans-serif;';
    echo '        }';
    echo '        .fft-header {';
    echo '            background-color: #f1f1f1;';
    echo '            border-bottom: 1px solid #ddd;';
    echo '            padding: 30px;';
    echo '            text-align: center;';
    echo '            color: #444;';
    echo '            font-size: 22px;';
    echo '        }';
    echo '        .fft-content {';
    echo '            padding: 30px;';
    echo '            text-align: center;';
    echo '            font-size: 18px;';
    echo '        }';
    echo '    </style>';
    echo '</head>';
    echo '<body>';
    echo '<div class="fft-header">';
    echo 'Francesca Framework';
    echo '</div>';
    echo '<div class="fft-content">';
    echo $text;
    echo '</div>';
    echo '</body>';
    echo '</html>';

    //stop everything
    die();

}

