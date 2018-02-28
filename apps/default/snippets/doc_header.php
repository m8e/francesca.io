
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Modern and lightest PHP framework developed with love for developers that helps you quickly write powerful and secure web apps and APIs.">
    <meta name="author" content="Andrea Pollastri - mail@andreapollastri.net">
    <meta name="keywords" content="php, framework, mvc, oop, server, software, apache, database, developer, dev, web, site, onlines, documentation, create">

    <title>Francesca Framework</title>

    <link rel="shortcut icon" href="data:image/png;base64,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"/>

    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/fontawesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/bootstrap/core/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/animatecss/3.5.2/animate.css">
    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/syntax-highlighter/custom/styles/shCore.css" media="all">
    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/syntax-highlighter/custom/styles/shThemeRDark.css" media="all">

    <style>
    body {
        background: #fff;
        color: #777777;
        font-size: 14px;
        line-height: 31px;
        letter-spacing: 0;
        font-weight: 400;
        padding: 0;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        letter-spacing: 0px;
        font-weight: normal;
        position: relative;
        padding: 0 0 0px 0;
        font-weight: normal;
        line-height: 1.8;
        color: #242424;
    }

    h1, .h1, h2, .h2, h3, .h3 {
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    h1 {
        font-size: 22px;
    }

    h2 {
        font-size: 20px;
    }

    h3 {
        font-size: 18px;
    }

    h4 {
        font-size: 21px;
    }

    h5 {
        font-size: 14px;
    }

    h6 {
        font-size: 14px;
    }

    h1 a,
    h2 a,
    h3 a,
    h4 a,
    h5 a,
    h6 a {
        text-decoration: none !important;
    }

    p {
        font-size: 15px;
        font-weight: 400;
        line-height: 26px;
        letter-spacing: 0;
        margin-top: 0px;
        text-align: justify;
    }

    img.aligncenter {
        display: block;
        text-align: center;
        display: block;
        margin: 0 auto 20px auto;
        padding: 0px;
        border: 0px;
        background: none;
    }

    ul {
        padding: 0;
        list-style: none;
    }

    ol li ul li {
        padding-left: 20px;
    }

    img.alignleft {
        float: left;
        margin: 6px 20px 6px 0;
        display: inline;
        border: 0px;
        background: none;
        padding: 0;
        display: block;
    }

    img.alignright {
        padding: 0;
        float: right;
        margin: 6px 0 6px 20px;
        border: 0px;
        display: block;
        background: none;
    }

    blockquote {
        font-size: 16px;
        line-height: 32px;
        font-family: 'Droid Serif', Georgia, "Times New Roman", serif;
        font-weight: normal;
        font-style: italic;
        position: relative;
        width: auto;
    }

    blockquote small {
        display: block;
        margin-top: 20px;
    }

    pre {
        line-height: 18px;
        margin-bottom: 18px;
    }

    .btn,
    a {
        outline: 0 !important;
        text-decoration: none !important;
    }

    ins {
        text-decoration: none;
    }

    sup {
        bottom: 1ex;
    }

    sub {
        top: .5ex;
    }

    p {
        padding: 0 0 15px 0;
    }

    .check li:before {
        content: "\f00c";
        font-family: "FontAwesome";
        font-size: 16px;
        left: 0;
        color: #242424;
        padding-right: 5px;
        position: relative;
        top: 2px;
    }

    .check li {
        font-size: 14px;
        list-style: none;
        margin-bottom: 4px;
    }

    .check {
        margin-left: 0;
        padding-left: 0
    }

    .section {
        padding: 180px 0;
        position: relative;
        display: block;
    }

    .white {
        background-color: #ffffff;
    }

    strong {
        color: #030303;
    }

    .grey {
        background-color: #f3f3f3;
    }

    .big-title h1 {
        font-size: 48px;
        font-weight: 300;
        margin-bottom: 0;
        text-transform: capitalize;
        padding-bottom: 0;
    }

    .dark-text {
        font-size: 4.125rem;
        line-height: 0rem;
        font-weight: 300;
    }

    h4 a {
        font-size: 14px;
        font-weight: bold;
    }

    .dark-text a {
        font-size: 14px;
        font-weight: bold;
        padding-left: 20px;
    }

    .dark-text hr {
        width: 130px;
        margin-left: 0;
        margin-top: 40px;
        border-width: 1px;
        border-color: #030303;
    }

    .intro {
        padding: 20px;
    }

    .intro1 {
        margin-top: 22px;
        padding: 30px 0px;
        background-color: #f3f3f3;
    }

    .intro1 li {
        list-style: none;
    }

    .intro1 a {
        color: #0E97EE !important;
    }

    .intro a {
        color: #030303;
        font-weight: 400;
        font-size: 16px;
    }

    .lead {
        text-transform: capitalize;
        text-align: center;
    }

    .left-align img {
        margin-top: 20px;
    }

    .drop-caps p:first-child::first-letter {
        color: #030303;
        display: block;
        float: left;
        font-size: 75px;
        line-height: 60px;
        text-transform: uppercase;
        margin-right: 10px;
        margin-top: 5px;
        padding: 4px;
    }

    .drop-caps.full p:first-child::first-letter {
        background: #030303 none repeat scroll 0 0 !important;
        color: #ffffff;
        margin-right: 15px;
        padding: 20px;
        font-size: 36px;
        font-family: Georgia;
        border-radius: 5px;
    }

    mark {
        background-color: #0E97EE;
        color: #ffffff;
        padding: 0 10px;
    }

    a:focus,
    a:hover {
        color: #0E97EE;
    }

    .intro2 i {
        padding-right: 10px;
        font-size: 21px;
    }

    .intro2 {
        background-color: #0E97EE;
        border: 2px solid #2187BB;
        border-radius: 5px;
        color: #ffffff;
        font-style: italic;
        padding: 10px 20px;
    }

    .intro2 p {
        padding: 0;
    }

    .intro2 a {
        color: #ffffff;
        font-weight: bold;
    }

    .intro1 ul {
        padding: 0 30px;
    }

    .btn-primary {
        background-color: #0E97EE;
        border: 1px solid #2187BB;
    }

    .btn-primary:hover {
        background-color: #2187BB;
        border: 1px solid #0E97EE;
    }

    .btn-info {
        background-color: #545454;
        border: 1px solid #656565;
    }

    .btn-info:hover {
        background-color: #656565;
        border: 1px solid #545454;
    }

    .navbar-inverse .navbar-nav > .active > a,
    .navbar-inverse .navbar-nav > .active > a:hover,
    .navbar-inverse .navbar-nav > .active > a:focus {
        background-color: #0E97EE;
        color: #fff;
    }

    .navbar-inverse {
        background-color: #030303;
        border: 0;
    }

    .navbar-inverse li.btn {
        border-radius: 0 !important;
        padding: 0;
    }

    .navbar-inverse li.btn a {
        color: #ffffff !important;
    }





    /*Docs*/

    .body {
        position: relative;
    }

    .sub-title {
        font-size: 30px;
        margin-top: 50px;
        margin-bottom: 10px;
        padding-bottom: 0;
    }

    .sub-title a {
        font-size: 16px;
    }

    .section.docs-heading {
        padding: 60px 0;
    }

    .affix {
        position: static;
    }

    @media (min-width: 992px) {
        .affix,
        .affix-bottom {
            width: 213px
        }
        .affix {
            position: fixed;
            top: 20px
        }
        .affix-bottom {
            position: absolute
        }
        .affix .bs-docs-sidenav,
        .affix-bottom .bs-docs-sidenav {
            margin-top: 0;
            margin-bottom: 0
        }
    }

    @media (min-width: 1200px) {
        .affix,
        .affix-bottom {
            width: 263px
        }
    }

    /* SIDEBAR */

    @media (min-width: 768px) {
        .docs-sidebar {
            padding-top: 20px;
            padding-left: 20px
        }
    }

    /* all links */
    .docs-sidebar .nav>li>a {
        color: #111;
        border-left: 2px solid transparent;
        padding: 0 20px;
        font-size: 15px;
        font-weight: 400;
    }

    /* nested links */
    .docs-sidebar .nav .nav>li>a {
        padding-left: 40px;
        font-size: 14px;
    }

    /* hover links */ 
    .docs-sidebar .nav>li:not(.active)>a:hover {
        color: #0E97EE;
        text-decoration: none;
        background-color: transparent;
        border-left-width: 1px;
        border-left-color: #0E97EE;
    }
    /* focus links */
    .docs-sidebar .nav>li>a:focus {
        text-decoration: none;
        background-color: transparent;
    }
    /* active links */
    .docs-sidebar .nav>.active>a {
        color: #0E97EE;
        text-decoration: none;
        background-color: transparent;
        border-left-color: #0E97EE;
    }
    /* all active links */
    .docs-sidebar .nav>.active>a, 
    .docs-sidebar .nav>.active:hover>a,
    .docs-sidebar .nav>.active:focus>a {
        font-weight: 700;
    }
    /* nested active links */
    .docs-sidebar .nav .nav>.active>a, 
    .docs-sidebar .nav .nav>.active:hover>a,
    .docs-sidebar .nav .nav>.active:focus>a {
        font-weight: 500;
    }

    @media (min-width: 992px) {
        .docs-sidebar .nav ul {
            display: none;
            padding-bottom: 10px;
        }
        .docs-sidebar .nav>.active>ul {
            display: block
        }
    }
    /*Syntax Highlighter : Sublime Theme */

    .syntaxhighlighter {
        background-color: #2b303b !important;
        padding: 15px 0;
        margin: 0em 0 0em 0 !important;
    }

    .syntaxhighlighter a,
    .syntaxhighlighter div,
    .syntaxhighlighter code,
    .syntaxhighlighter table,
    .syntaxhighlighter table td,
    .syntaxhighlighter table tr,
    .syntaxhighlighter table tbody,
    .syntaxhighlighter table thead,
    .syntaxhighlighter table caption,
    .syntaxhighlighter textarea {
        line-height: 1.3em !important;
    }

    .syntaxhighlighter .line.alt1 {
        background-color: #2b303b !important;
    }

    .syntaxhighlighter .line.alt2 {
        background-color: #2b303b !important;
    }

    .syntaxhighlighter .string,
    .syntaxhighlighter .string a {
        color: #90be8c !important;
    }

    .syntaxhighlighter .color1,
    .syntaxhighlighter .color1 a {
        color: #d08770 !important;
    }

    .syntaxhighlighter .plain,
    .syntaxhighlighter .plain a {
        color: #c0c5ce !important;
    }

    .syntaxhighlighter .keyword {
        color: #bf616a !important;
    }

    .syntaxhighlighter .gutter {
        color: #757a84 !important;
    }

    .syntaxhighlighter .line.highlighted.alt1,
    .syntaxhighlighter .line.highlighted.alt2 {
        background-color: #333E49 !important;
    }

    .syntaxhighlighter .gutter .line.highlighted {
        background-color: #343d46 !important;
        color: #757a84 !important;
    }

    .syntaxhighlighter .value {
        color: #96b5b4 !important;
    }
    /*css*/
    /* .syntaxhighlighter .css.plain,
    .syntaxhighlighter .css.plain a {
        color: #d08770 !important;
    } 

    .syntaxhighlighter .css.keyword {
        color: #c0c5ce !important;
    }*/

    .syntaxhighlighter .color3,
    .syntaxhighlighter .color3 a {
        color: #b48ead !important;
    }
    /*js*/

    .syntaxhighlighter .js.keyword {
        color: #b48ead !important;
    }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://allyoucan.cloud/cdn/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://allyoucan.cloud/cdn/respond/1.4.2/respond.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <div class="container">