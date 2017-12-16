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

    echo '<!doctype html>';
    echo '<html lang="en">';
    echo '    <head>';
    echo '        <meta charset="utf-8">';
    echo '        <meta http-equiv="X-UA-Compatible" content="IE=edge">';
    echo '        <meta name="viewport" content="width=device-width, initial-scale=1">';
    echo '        <title>Francesca Framework</title>';
    echo '        <style>';
    echo '            html, body {';
    echo '                background-color: #fff;';
    echo '                color: #636b6f;';
    echo '                font-family: Sans-serif;';
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
    echo '                    <b>Francesca Framework</b>';
    echo '                </div>';
    echo '                <div class="text m-b-md">';
    echo '                    <p>'.$text.'</p>';
    echo '                </div>';
    echo '            </div>';
    echo '        </div>';
    echo '    </body>';
    echo '</html>';

    //stop everything
    die();

}

