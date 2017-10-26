<?php

/*
| Francesca Framework
| https://francesca.io
| Version 0.9
|
| Copyright 2017, Andrea Pollastri
| Released under the MIT license
|
|
|
|------------------------------------------------------------------------
| Core Page - libs/core.php
|------------------------------------------------------------------------
| This is the core of the framework... here the main class Core will
| initialized and afther subclasses will append as extensions in an
| unique global var called "$francesca" that contains all classes and
| methods of Francesca and of any 3parths vendor.
|
*/



//Main "fra" class istance
Use Francesca\Core;
$fra = Core::instance();



//Framework classes init
Use Francesca\Auth;
$fra->auth = new Auth;

Use Francesca\Date;
$fra->date = new Date;

Use Francesca\File;
$fra->file = new File;

Use Francesca\Form;
$fra->form = new Form;

Use Francesca\Http;
$fra->http = new Http;

Use Francesca\Text;
$fra->text = new Text;

Use Francesca\Tool;
$fra->tool = new Tool;



/*
| DATA CLASS INIT AND DB CONN
| Francesca Framework choose to integrate Medoo (Copyright 2017, Angel Lai)
| Credits and rights: Angel Lai (Released under the MIT license)
| For any info: https://medoo.in
| Version installed here: 1.4.5
| Thankyou Medoo! :)
*/
//Medoo init & configurarion
Use Medoo\Medoo;
if(fra_config["db_conn"] == 1) {
	$fra->data = new Medoo([
	    'database_type'     => fra_config["db_type"],
	    'database_file'     => fra_config["db_file"],
	    'server'            => fra_config["db_host"],
	    'port'              => fra_config["db_port"],
	    'database_name'     => fra_config["db_name"],
	    'username'          => fra_config["db_user"],
	    'password'          => fra_config["db_pass"],
	    'charset'           => fra_config["db_cset"],
	    'prefix'            => fra_config["db_pref"]]);
}



/*
| MAIL INIT AND DEFAULT CONFIG
| Francesca Framework choose to integrate PHPMailer
| (Copyright 2017: Marcus Bointon, Jim Jagielski, Andy Prevost)
| Released under GNU Lesser General Public License
| For any info: https://github.com/PHPMailer/PHPMailer/
| Version installed here: 5.5
| Thankyou PHPMailer! :)
*/
//PHPMailer init & configurarion
Use PHPMailer\PHPMailer;
Use PHPMailer\Exception;
$fra->mail = new PHPMailer(true);
$fra->mail->isSMTP();
$fra->mail->isHTML(true);
$fra->mail->setFrom(fra_config["mail_from"], fra_config["mail_name"]);
$fra->mail->addReplyTo(fra_config["mail_reply"]);
$fra->mail->SMTPDebug	= fra_config["mail_debug"];
$fra->mail->Host 		= fra_config["mail_smtp_host"];
$fra->mail->Port 		= fra_config["mail_smtp_port"];
$fra->mail->SMTPAuth 	= fra_config["mail_smtp_auth"];
$fra->mail->SMTPSecure 	= fra_config["mail_smtp_secure"];
$fra->mail->Username 	= fra_config["mail_user"];
$fra->mail->Password 	= fra_config["mail_pass"];

