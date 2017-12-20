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







function fra_template_404() {

    echo '<!doctype html>';
    echo '<html lang="en">';
    echo '    <head>';
    echo '        <meta charset="utf-8">';
    echo '        <meta http-equiv="X-UA-Compatible" content="IE=edge">';
    echo '        <meta name="viewport" content="width=device-width, initial-scale=1">';
    echo '        <title>File Not Found</title>';
    echo '        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">';
    echo '        <style>';
    echo '            html, body {';
    echo '                background-color: #fff;';
    echo '                color: #636b6f;';
    echo '                font-family: "Open Sans", Sans-serif;';
    echo '                font-weight: 100;';
    echo '                height: 100vh;';
    echo '                margin: 0;';
    echo '            }';
    echo '            .full-height {';
    echo '                height: 100vh;';
    echo '            }';
    echo '            .flex-center {';
    echo '                align-items: center;';
    echo '                display: flex;';
    echo '                justify-content: center;';
    echo '            }';
    echo '            .position-ref {';
    echo '                position: relative;';
    echo '            }';
    echo '            .top-right {';
    echo '                position: absolute;';
    echo '                right: 10px;';
    echo '                top: 18px;';
    echo '            }';
    echo '            .content {';
    echo '                text-align: center;';
    echo '            }';
    echo '            .title {';
    echo '                color: #000000;';
    echo '                font-size: 24px;';
    echo '            }';
    echo '            .text {';
    echo '                font-size: 16px;';
    echo '            }';
    echo '            .m-b-md {';
    echo '                margin-bottom: 30px;';
    echo '            }';
    echo '        </style>';
    echo '    </head>';
    echo '    <body>';
    echo '        <div class="flex-center position-ref full-height">';
    echo '            ';
    echo '            <div class="content">';
    echo '                <div class="title">';
    echo '                    <b>Error 404</b>';
    echo '                </div>';
    echo '                <div class="text m-b-md">';
    echo '                    <p>file not found</p>';
    echo '                </div>';
    echo '            </div>';
    echo '        </div>';
    echo '    </body>';
    echo '</html>';

    //stop everything
    die();

}