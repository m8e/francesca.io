<?php $fra->ways->getsnip("doc_header"); ?>


            <section id="top" class="section docs-heading">

                <div class="row">
                    <div class="col-md-12">
                        <div class="big-title text-center">
                            <h1><i class="fa fa-code" aria-hidden="true"></i> Francesca Framework</h1>
                            <p class="lead">modern and lightest PHP framework developed with <i class="fa fa-heart" aria-hidden="true"></i> for developers</p>
                            <br><h2>Enjoy Francesca :)</h2><br>
                        </div>
                        <!-- end title -->
                    </div>
                    <!-- end 12 -->
                </div>
                <!-- end row -->

                <hr>

            </section>
            <!-- end section -->

            <div class="row">

                <div class="col-md-3">
                    <nav class="docs-sidebar" data-spy="affix" data-offset-top="300" data-offset-bottom="200" role="navigation">
                        <ul class="nav">
                            <li><a href="#intro">Introduction</a></li>
                            <li><a href="#basic-concept">Basic Concepts</a></li>
                            <li><a href="#installation">Installation</a></li>
                            <li><a href="#configuration">Configuration</a></li>
                            <li><a href="#multi-tenant">Multi-tenant</a></li>
                            <li><a href="#routing">Routing</a></li>
                            <li><a href="#template">Template</a></li>
                            <li><a href="#helpers">Helpers</a>
                                <ul class="nav">
                                    <li><a href="#tool">Tool</a></li>
                                    <li><a href="#ways">Ways</a></li>
                                    <li><a href="#text">Text</a></li>
                                    <li><a href="#form">Form</a></li>
                                    <li><a href="#date">Date</a></li>
                                    <li><a href="#file">File</a></li>
                                    <li><a href="#http">Http</a></li>
                                    <li><a href="#auth">Auth</a></li>
                                    <li><a href="#data">Data</a></li>
                                    <li><a href="#mail">Mail</a></li>
                                </ul>
                            </li>
                            <li><a href="#libraries">Libraries</a></li>
                            <li><a href="#3thparts">3th parts</a></li>
                            <li><a href="#cli">CLI tools</a></li>
                            <li><a href="#cdn">CDN tools</a></li>
                            <li><a href="#support">Support</a></li>
                        </ul>
                        <div style="min-height: 100px;"></div>
                    </nav>
                </div>
                <div class="col-md-9">
                    <section id="intro" class="welcome">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Introduction<hr></h2>
                                <div class="row">

                                    <div class="col-md-12 full">
                                        <div class="intro1">
                                            <ul>
                                                <li><strong>Project: </strong>Francesca Framework</li>
                                                <li><strong>Version: </strong> 2.8</li>
                                                <li><strong>Size: </strong> about 70 Kb</li>
                                                <li><strong>Author: </strong> <a href="https://andreapollastri.net" target="_blank">Andrea Pollastri</a></li>
                                                <li><strong>License: </strong> <a href="https://github.com/andreapollastri/francesca.io/blob/master/LICENSE" target="_blank">MIT License</a></li>
                                                <li><strong>Support: </strong> <a href="mailto:mail@andreapollastri.net">mail@andreapollastri.net</a></li>
                                                <li><strong>Github: </strong> <a href="https://github.com/andreapollastri/francesca.io" target="_blank">andreapollastri/francesca.io</a></li>
                                                <li><strong>Composer: </strong> $user@publicroot > <font color="#0E97EE"><i>composer create-project andreapollastri/francescaframework .</i></font></li>
                                            </ul>
                                        </div>

                                        <hr>
                                        <div>
                                            <p>Francesca Framework is a MVC and multi-tenant PHP framework that lets you develop PHP based websites, web applications, microservices and APIs easly, quickly, securetly, cleanly and clearly. A perfect tool for any developer who wants write scalable and long time manteinable web applications. In this page you can find an essential documentation to learn it!</p>

                                            <h4>Features</h4>
                                            <p>Modern and lightest MVC php framework that helps you quickly write powerful and secure web apps and APIs.
                                            <ol>
                                                <li>extremely easy to learn and use</li>
                                                <li>friendly and commented construction</li>
                                                <li>multi-tenant configurations and apps manager</li>
                                                <li>composer installation</li>
                                                <li>custom CLI tools</li>
                                                <li>schelude cron tasks</li>
                                                <li>MVC http routing</li>
                                                <li>classes autoloader</li>
                                                <li>middlewares support</li>
                                                <li>RESTful support</li>
                                                <li>MySql and Sqlite ORM</li>
                                                <li>native PSR-4 support</li>
                                                <li>only 69kb files size</li>
                                                <li>PHP Unit Test support</li>
                                                <li>active updates and support</li>
                                            </ol>
                                            </p>

                                            <h4>Requirements</h4>
                                            <p>All you need is a good and professional web hosting service or cloud VPS.
                                            <ol>
                                                <li>Apache based web-server (or hybrid nigix/Apache)</li>
                                                <li>PHP 7.0 version or later</li>
                                                <lI>PDO extension</li>
                                                <li>Composer extension</li>
                                                <li>SSH access to public root with writible permission on it</li>
                                            </ol>
                                            </p>
                                            <div class="intro2 clearfix">
                                                <p><i class="fa fa-exclamation-triangle"></i> This project is under hard growing and new functions will be available soon!</p>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </section>

                    <section id="basic-concept" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Basic concepts <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-12">
                                
                                <h4>Envs & Apps</h4>
                                <p>Francesca Framework is a MVC and multi-tenant framework that manages one or more hostnames and multiple web apps through environments configuration files.<br>
                                After installation you can find a default environment file into "envs" folder and one "default" app into "apps" folder that accepts all hostnames requests.<br>
                                  You can create specific environment configuration and app folder for each hostname simply generating a domain.ltd.php configuration file into "envs" folder.<br>
                                  By default www.domain.ltd and domain.ltd point at the same domain.ltd.php configuration file but if you create a www.domain.ltd.php file and one domain.ltd.php you are able to obtain differents behaviors for www and without www requests.<br>
                                  You can use also subdomains hostnames... just creating a subdomain.domain.ltd.php configuration file into "envs" folder.<br>You can use every subdomain level you want.
                                <br>Into apps folder you can generate multiple and differents apps to associate to one or more hostnames (through envs files).</p>

                                <h4>Custom settings</h4>
                                <p>Francesca Framework provides a global array constant called "fra_var" that includes all global environment vars and one object called "fra" that includes all framework classes.<br>
                                In every single app you can add one or more variable to "fra_var" array through apps/APPNAME/config.php and adding a list of $fra_config = VAR; into it.<br>
                                You can install 3th parts libs through composer, updating the dependences list into composer.json file and running "composer update" CLI istruction. You can after inizialize all new class as main singleton "$fra" pattern (ex. $fra->classname) into any single controller or in the main apps/APPNAME/core.php.</p>

                                <h4>Helpers & functions</h4>
                                <p>Francesca Framework includes many native helpers and functions categorized in text, date, form, tool, file, http and ways. You can find their API in the next sections of this documents.</p>

                                <h4>Database ORM</h4>
                                <p>As default, Francesca Framework includes an useful 3th parts ORM for MySql/sqlite connections called Medoo.<br>
                                    You can use all <a href="https://medoo.in/doc" target="_blank">Medoo APIs</a> through $fra->data pre-initialized object. All init configurations are into environment file.</p>

                                <h4>Mail sender</h4>
                                <p>As default, Francesca Framework includes an useful 3th parts library to manage authenticated SMTP mail sender called PHPmailer.<br>
                                    You can use all <a href="https://github.com/PHPMailer/PHPMailer/wiki/Tutorial" target="_blank">PHPmailer APIs</a> through $fra->mail pre-initialized object. All init configurations are into environment file.</p>

                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->

                    <section id="installation" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Installation <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <h4>Via Composer Installer (raccommanded)</h4>
                        <p>All you need to install Francesca Francesca is an SSH access to public root folder and Composer Extension.<br>
                        After login into public root folder run this command: <pre>composer create-project andreapollastri/francescaframework .</pre>
                        When composer finish you can verify the correct installation running this command:
                        <pre>php fra</pre>
                        If you receive a Francesca Framework welcome messagge your installation is complete.</p>

                        <h4>Via Git Installer</h4>
                        <p>You can install it also via Git.<br>
                        After login into public root folder run this command: <pre>git clone https://github.com/andreapollastri/francesca.io.git</pre>
                        Then run: <pre>composer update</pre>
                        When you finish you can verify the correct installation running this command:
                        <pre>php fra</pre>
                        If you receive a Francesca Framework welcome messagge your installation is complete.</p>

                        <h4>Via FTP Installer</h4>
                        <p>This is not a good way but if you are not able to use SSH you can force installation downloading Francesca Framework from Github.</p>
                        <p><a href="https://github.com/andreapollastri/francesca.io" target="_blank" class="btn btn-primary">Download it!</a></p>
                        <p>Next steps are:
                        <ol>
                            <li>Upload it into public root folder.</li>
                            <li>Download <a href="https://medoo.in" target="_blank">Medoo</a> and <a href="https://github.com/PHPMailer/PHPMailer/" target="_blank">PHPmailer</a>.</li>
                            <li>Rename "autoload.php_NOCOMPOSER" file into "autoload.php". You can find it into libs/vendors/ directory.</li>
                        </ol>
                        </p>
                        <p>If you are not able to use SSH you are not able to use Francesca Framework CLI tools so if you need to create a new App folder you have to duplicate the "default" folder into "apps" folder and if you need to create a new environment file you have to duplicate "default.php" file into "envs" folder.<br>All 3th parts libs are to be uploaded into vendors folder... autoload file will autoload them.</p>

                    </section>
                    <!-- end section -->

                    <section id="configuration" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Configuration <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <h4>Create a new application</h4>
                        <p>First step to config Francesca Framework is generate a new Application folder.<br>
                        You can do it via SSH into public root forder with this command:
                        <pre>php fra createapp APPNAME</pre>
                        Where APPANAME is your project name (ex. "website_production", "website_staging").<br>
                        IMPORTANT: no space, no special characters are permitted in APPNAME. Only letters, numbers, points, underscores and dashes.<br>
                        One single app can be associate to one or more tenants through environment files.<br>
                        If you don't create any custom app you can use default app.</p>

                        <h4>Create a new environment</h4>
                        <p>For every tenant you want config you have to generate a new Environment configuration file.<br>
                        You can do it via SSH into public root forder with this command:
                        <pre>php fra createenv DOMAIN.LTD</pre>
                        Where DOMAIN.LTD is the specific tenant name.<br>
                        IMPORTANT: no space, no special characters are permitted in DOMAIN.LTD. Only letters, numbers, points, underscores and dashes.<br>
                        If you don't create any custom env you can use default file as default for all tenants.</p>

                        <h4>Set crons</h4>
                        <p>Francesca Framework manages 1 minute 1 hour and 1 day crons app per app. All you need to do is set a one minut cron job on cron.php tenant per tenant.<br><br>Via URL<pre>http://domain.ltd/cron.php</pre>Via cron tab (remember to specify a tenant cron per cron):
                        <pre>* * * * *  php path/to/public/root/cron.php   domain.ltd</pre>You can find and use 1m.php, 1h.php and 1d.php files into apps/APPNAME/tasks folder to create scheduled functions into the framework ecosystem.</p>

                        <h4>Globals</h4>
                        <p>You can set multi-tenants globals constants or "special functions" into globals.php file.<br>You can find it into public root. This feature is useful to set, for example, global constants for multiple environments.</p>

                        <h4>Configuration file</h4>
                        <p>Every configuration file includes different constants.<br><br>
                        <b>PART 1 - General information about application / environment</b><br>
                        These are simply name and version information... not important for functionality of framework.
                        <pre class="brush: php">
                                //Define an application name... (ex: My Website, Prod App, Staging App, ...)
                                $fra_config["name"]                             = "francesca.io configuration example";
                                //Define a version of app... (ex: 1.3 or beta, ...)
                                $fra_config["version"]                          = "1";
                        </pre>
                        <br>
                        <b>PART 2 - Application folder</b><br>
                        This is an important parameter. You can define app folder to use into current environment. 
                        <pre class="brush: php">      
                                //Define the application folder
                                $fra_config["folder"]                           = "default";
                        </pre>
                        <br>
                        <b>PART 3 - Timezone</b><br>
                        Global timezone to use into environment. 
                        <pre class="brush: php">      
                                //Define a global timezone for the app
                                $fra_config["timezone"]                         = "Europe/Rome";
                        </pre>
                        <br>
                        <b>PART 4 - Logs</b><br>
                        You can decide to enable logging system and its level.<br>
                        You can find logs files into "logs" folder.
                        <pre class="brush: php">
                                //Set Logs (0 - no logs, 1 - only errors logs, 2 - all logs)
                                $fra_config["logs"]                             = 0;
                        </pre>


                        <br><b>PART 5 - Output minify</b><br>
                        Enabling "minify" you can minify all HTML view output.
                        <pre class="brush: php">    
                                //Set HTML output minify (0 - no minify, 1 - minify)
                                $fra_config["minify"]                           = 0;
                        </pre>

                        <br><b>PART 6 - Default settings</b><br>
                        You can setup a default routing or a default redirect.
                        <pre class="brush: php">    
                                //Set Default Routing (home page)
                                $fra_config["default_controller"]               = "pages";
                                $fra_config["default_action"]                   = "home";
                                //Set a main default redirect (https://domain.xyz) or keep empty
                                $fra_config["default_redirect"]                 = "";
                        </pre>


                        <br><b>PART 7 - Errors settings</b><br>
                        You can setup an errors routing or an error redirect.
                        <pre class="brush: php">    
                                //Set Error Routing (404 page)
                                $fra_config["error_controller"]                 = "pages";
                                $fra_config["error_action"]                     = "error";
                                //Set a 404 redirect (https://domain.xyz) or keep empty
                                $fra_config["error_redirect"]                   = "";
                        </pre>


                        <br><b>PART 8 - Database settings ($fra->data object)</b><br>
                        You can config a Medoo database ORM connection.

                        <pre class="brush: php">    
                                //Framework Database Class (0 - disable, 1 - enable)
                                $fra_config["db_conn"]                          = 0;
                                //Set Database Type (mysql, sqlite)                                 
                                $fra_config["db_type"]                          = "mysql";  
                                //Set sqlite DB File Name and dir (ex. /var/www/domain.xyz/file.sqlite)                 
                                $fra_config["db_file"]                          = "";   
                                //Set DB host                               
                                $fra_config["db_host"]                          = "localhost";
                                //Set DB host port
                                $fra_config["db_port"]                          = "3306";   
                                //Set DB name               
                                $fra_config["db_name"]                          = "";
                                //Set DB table_prefix
                                $fra_config["db_pref"]                          = "";   
                                //Set DB charset
                                $fra_config["db_cset"]                          = "utf-8";
                                //Set DB username/password              
                                $fra_config["db_user"]                          = "";                   
                                $fra_config["db_pass"]                          = "";   
                        </pre>




                        <br><b>PART 9 - Mail sender ($fra->mail object)</b><br>
                        You can config phpMailer settings.

                        <pre class="brush: php">    
                                //Set Send Mail enable/disable
                                $fra_config["mail_status"]                      = 0;
                                //Set Send Mail Debug
                                $fra_config["mail_debug"]                       = 0;
                                //Set Send Mail SMTP host
                                $fra_config["mail_smtp_host"]                   = "";
                                //Set Send Mail SMTP host port
                                $fra_config["mail_smtp_port"]                   = 587;
                                //Set Send Mail SMTP host auth
                                $fra_config["mail_smtp_auth"]                   = true;
                                //Set Send Mail SMTP host auth type
                                $fra_config["mail_smtp_secure"]                 = "tls";
                                //Set Send Mail username/password
                                $fra_config["mail_user"]                        = "";
                                $fra_config["mail_pass"]                        = "";
                                //Set Default Send Mail "From" address/name
                                $fra_config["mail_from"]                        = "";
                                $fra_config["mail_name"]                        = "";
                                //Set Default Send Mail "Reply To" address
                                $fra_config["mail_reply"]                       = "";
                        </pre>




                        <br><b>PART 10 - File uploads ($fra->file object)</b><br>
                        You can set an array of global valid upload extensions.
                        <pre class="brush: php">    
                                //Extensions file allowed in uplaod 
                                $fra_config["upload_allow"]                     = Array("txt","doc","docx","ods","pdf","jpg","jpeg","png","gif","zip");
                        </pre>




                        <br><b>PART 11 - FTP settings ($fra->file object)</b><br>
                        You can config global FTP settings.

                        <pre class="brush: php">
                                //Set FTP service enable/disable
                                $fra_config["ftp_status"]                       = 0;
                                //Set FTP hostname
                                $fra_config["ftp_host"]                         = "";
                                //Set FTP username
                                $fra_config["ftp_user"]                         = "";
                                //Set FTP password
                                $fra_config["ftp_pass"]                         = "";
                                //Set FTP port
                                $fra_config["ftp_port"]                         = 21;
                                //Set SSL connection (0 - FTP, 1 - SFTP)
                                $fra_config["ftp_sftp"]                         = 0;
                                //Set FTP base path
                                $fra_config["ftp_path"]                         = "";
                        </pre>


                        <br><b>PART 12 - Env mode - SSL</b><br>
                        You can manage HTTPS behavior.

                        <pre class="brush: php">
                                //SSL mode (0 - no preference, 1 - force SSL)
                                $fra_config["ssl_mode"]                         = 0;
                        </pre>


                        <br><b>PART 13 - Env mode - www</b><br>
                        You can manage www.domain behavior.

                        <pre class="brush: php">
                                //WWW mode (0 - no preference, 1 - force WWW, 2 - force NO WWW)
                                $fra_config["www_mode"]                         = 0;
                        </pre>


                        <br><b>PART 14 - Env mode - other methods</b><br>
                        You can manage other mode methods and their settings.

                        <pre class="brush: php">        
                                //Preview MODE (0 - disable, 1 - enable)
                                $fra_config["preview_mode"]                     = 0;
                                //Out Of Service MODE (0 - disable, 1 - enable)
                                $fra_config["outofservice_mode"]                = 0;
                                //Go Live MODE (0 - disable, 1 - enable)
                                $fra_config["golive_mode"]                      = 0;
                                //Go Down MODE (0 - disable, 1 - enable)
                                $fra_config["godown_mode"]                      = 0;
                                //Debug Mode (0 - disable, 1 - enable)
                                $fra_config["debug_mode"]                       = 0;
                                //////////////////////////////////////////////* APPLICATION MODES VAR */////
                                ////////////////////////////////////////////////////////////////////////////
                                //Define Go Live Date (aaaa-mm-yy hh:mm:ss)
                                $fra_config["golive_date"]                      = "2020-01-01 00:00:00";
                                //Define Go Down Date (aaaa-mm-yy hh:mm:ss)
                                $fra_config["godown_date"]                      = "2022-01-03 00:00:00";
                                //Set Out Of Service Routing
                                $fra_config["outofservice_controller"]          = "";
                                $fra_config["outofservice_action"]              = "";
                                //Set a Out Of Service redirect (https://domain.xyz) or keep empty
                                $fra_config["outofservice_redirect"]            = "";
                                //Set Go Live Routing
                                $fra_config["golive_controller"]                = "";
                                $fra_config["golive_action"]                    = "";
                                //Set a Go Live redirect (https://domain.xyz) or keep empty
                                $fra_config["golive_redirect"]                  = "";
                                //Set Go Down Routing
                                $fra_config["godown_controller"]                = "";
                                $fra_config["godown_action"]                    = "";
                                //Set a Go Down redirect (https://domain.xyz) or keep empty
                                $fra_config["godown_redirect"]                  = "";
                                //Set App Preview Allow IP list
                                $fra_config["preview_ipallow"]                  = array();
                                //Set Debud Allow IP list
                                $fra_config["debug_ipallow"]                    = array();
                        </pre>


                        <br><b>PART 15 - PHP ini error</b><br>
                        You can decide to enable or disable php ini errors.

                        <pre class="brush: php">
                                //Set PHP INI Errors View (0 - no, 1 - yes)
                                $fra_config["debug_inierror"]                   = 0;
                        </pre>

                        <br><br>
                        You can override configuration into single application using $fra_config vars into apps/APPNAME/config.php file.<br>
                        <b>Every setting is available into fra_var constant array.</b><br>
                        There are also other vars into it:
                        <pre><b>current_date</b> (Y-m-d)</pre>
                        <pre><b>current_time</b> (H:i:s)</pre>
                        <pre><b>ssl</b> (true/false)</pre>
                        <pre><b>url</b> (http://domain.ltd)</pre>
                        <pre><b>uri</b> (/pages/about-us/)</pre>
                        <pre><b>domain</b> (domain.ltd)</pre>
                        <pre><b>path</b> (/path/to/public/root/)</pre>
                        <pre><b>assets</b> (http://domain.ltd/apps/APPNAME/assets/)</pre>
                        <pre><b>files_path</b> (/path/to/public/root/apps/APPNAME/files/)</pre>
                        <pre><b>files</b> (http://domain.ltd/apps/APPNAME/files/)</pre>
                        <pre><b>error</b> (404, 403, etc...)</pre>
                        <pre><b>url_paths</b> (array composed by controller, action, id, varj, vark, varw, varx, vary, varz values)</pre>


                    </section>
                    <!-- end section -->

                    <section id="multi-tenant" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Multi-tenant <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <p>You can manage multiple environments, apps and tenants through environments config files and applications folders.<br>
                            For example... you can manage staging.domain.ltd URL with its staging.domain.ltd.php "envs" file to use apps/staging/ application and domain.ltd with its domain.ltd.php "envs" file to use apps/production/ application.<br>
                            You can config domain, www.domain and no-level-limit subdomains (so you can manage for example api.domain.ltd and login.microservices.domain.ltd).<br>
                            You can config multiple tenants to one app.<br>
                            All not configured tennats uses "default" env config file by defaut.
                        </p>

                    </section>
                    <!-- end section -->

                    <section id="routing" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Routing <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <h4>Logic</h4>
                        <p>In Francesca Framework all HTTP requests are managed by a MVC pattern that applies security rules like disable .php page directly requests, disable explits get requests (like page/?id=293&q=test), escape special characters and forbid access to system folders/files.<br>
                        All requests are into Francesca Framework core excluded direct static content requests (ex. domain.ltd/apps/APPNAME/assets/css/style.css or domain.ltd/google_verify.txt).<br>

                        <h4>Vars schema</h4>
                        Francesca Framework MVC logic consist in this schema:
                        <pre><b>controller</b> (controller page request -> current app MVC sub-folder)</pre>
                        <pre><b>action</b> (sub-controller page request -> current controller sub-page)</pre>
                        <pre><b>id</b> (one ID var that let you identify STRING or IDS relative to current request)</pre>
                        <pre><b>varj</b> (free and customizable get var to use into framework)</pre>
                        <pre><b>vark</b> (free and customizable get var to use into framework)</pre>
                        <pre><b>varw</b> (free and customizable get var to use into framework)</pre>
                        <pre><b>varx</b> (free and customizable get var to use into framework)</pre>
                        <pre><b>vary</b> (free and customizable get var to use into framework)</pre>
                        <pre><b>varz</b> (free and customizable get var to use into framework)</pre>
                        All these parameters are into fra_var constant array (ex. fra_var["varj"]).
                        </p>

                        <h4>MVC configuration</h4>
                        <p>Francesca Framework MVC logic works on app file system and folder structure.<br>
                        Every app contains the folders:
                        <ul>
                            <li>- CONTROLLERS</li>
                            <li>- MIDDLEWARES</li>
                            <li>- MODELS</li> 
                            <li>- LAYOUTS</li>
                            <li>- VIEWS</li>
                        </ul>
                        In every MVC folder we can put another folder with the desidered "controller" name.<br>
                        Into there we have to put an index.php file that is the default action for every "only-control" request (ex. domain.ltd/controller/).<br>
                        Every request includes system files in this order:
                        <pre><b>apps/AppName/controllers/CONTROLLER.php</b> if exists</pre>
                        <pre><b>apps/AppName/models/CONTROLLER.php</b> if exists</pre>
                        <pre><b>apps/AppName/models/CONTOLLER/ACTION.php</b> if exists</pre>
                        <pre><b>apps/AppName/middlewares/CONTROLLER.php</b> if exists</pre>
                        <pre><b>apps/AppName/middlewares/CONTROLLER/ACTION.php</b> if exists</pre>
                        <pre><b>apps/AppName/layouts/CONTROLLER.php</b> if exists or <b>apps/AppName/views/CONTROLLER/ACTION.php</b></pre>
                        This method lets you show a simple only view page (without models or controller - ex. static content) or a middlewares (ex. for APIs) or combine all them to create a complex MVC system with views, middlewares, models and controllers without any route class or pre-defined route variable.<br>
                        <b>Remeber that default action for any controller is "INDEX" (if you don't declare any explicit action) and that you have to define a default routing for the env (ex. domain.ltd start with implict but not showed in URL "/pages/home/"" controller and action)... so Francesca Framework routing is SEO and user friendly.</b><br>
                        All get requests post "action" (id, varj, vark, varw, varx, vary, varz) are utilizable as GET vars into the framework but are not useful to MVC structure/functionality.<br>
                        Every app includes an ending.php file so you can add common functions or custom logs in the end of MVC structure.
                        </p>

                    </section>
                    <!-- end section -->

                    <section id="template" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Template <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <p>
                        Basic use of Francesca Framework MVC system is through "views". Every single controller/action have to have a single action middleware and/or a single action view PHP page.<br>
                        This method is not confortable to manage comples websites or webapps structures and templates so you can use "layouts" and "snippets".
                        <br>You can compose complex and differents layouts controller per controller.<br>
                        For example...
                        <pre>
APPNAME/
    /layouts/
        backend.php
        frontend.php
    /snippets/
        backend_header.php
        backend_menu.php
        backend_footer.php
        frontend_header.php
        frontend_menu.php
        frontend_sidebar.php
        frontend_footer.php
    /views/
        /frontend/
            index.php
            about.php
            portfolio.php
            contact.php
        /backend/
            index.php
            login.php
            insert.php
            edit.php
            delete.php
            logout.php
                        </pre>
                        You can compose backend layout in this way:
                        <pre class="brush: php">
$fra->ways->getsnip("backend_header");
$fra->ways->getsnip("backend_menu");
$fra->ways->getview();
$fra->ways->getsnip("backend_footer");
                        </pre>

                        And you can compose frontend layout in this way:
                        <pre class="brush: php">
$fra->ways->getsnip("frontend_header");
$fra->ways->getsnip("frontend_menu");
$fra->ways->getview();
$fra->ways->getsnip("frontend_sidebar");
$fra->ways->getsnip("frontend_footer");
                        </pre>
                        In this way you can create differents and complex templates based on controllers and action requests with commons snippets.
                    </p>

                    </section>
                    <!-- end section -->

                    <section id="helpers" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Helpers <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
          

                            <div class="col-xs-12">
                                <h4 id="tool">Tool <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></h4>
                                <p>The Francesca/Tool is a set of generic tools</p>
                                <p><b>$fra->tool->exceptions(EXCEPTIONS, VAR)</b><br>This functions verifies if still one value of an"expentions" array is like a selected var and returns TRUE/FALSE.</p>
                                <p><b>$fra->tool->combinations(ARRAYS)</b><br>This functions takes an array of arrays and combines them into a multi-array matrix.</p>
                                <p><b>$fra->tool->logit(DATA, NAME)</b><br>This function lets you log everything with a custom name and a custom array of data.</p>
                                <p><b>$fra->tool->logitlight(DATA, NAME)</b><br>This function lets you log a custom array of data with a custom name.</p>
                                <p><b>$fra->tool->isonline(URL)</b><br>This function checks if an URL is or not on-line and returns TRUE or FALSE value.</p>
                                <p><b>$fra->tool->redirect(URL)</b><br>This function redirects to an URL.</p>
                                <p><b>$fra->tool->jsontoarray(JSON)</b><br>This function returns an array from a JSON</p>
                                <p><b>$fra->tool->jsonfromarray(ARRAY)</b><br>This function returns a JSON from an ARRAY</p>
                                <p><b>$fra->tool->sessionset(VARS)</b><br>This function adds an array of vars to session.</p>
                                <p><b>$fra->tool->sessionread(VAR)</b><br>This function returns a VAR session value.</p>
                                <p><b>$fra->tool->cookieset(NAME, VALUE)</b><br>This function sets a cookie with a name, a value and a time in second (ex. 86400 -> 1day, 3600 -> 1h, ...).</p>
                                <p><b>$fra->tool->cookieread(NAME)</b><br>This function returns a cookie value.</p>
                                <p><b>$fra->tool->encrypt(STRING, KEY)</b><br>This function encrypts a STRING with a KEY.</p>
                                <p><b>$fra->tool->decrypt(STRING, KEY)</b><br>This function decrypts a STRING with a KEY.</p>
                                <p><b>$fra->tool->password(LENGHT)</b><br>This function returns a LENGHT password.</p>
                                <p><b>$fra->tool->code(LENGHT)</b><br>This function returns a LENGHT code.</p>
                                <p><b>$fra->tool->coden(LENGHT)</b><br>This function returns a LENGHT numeric code.</p>
                                <p><b>$fra->tool->codean(LENGHT)</b><br>This function returns a LENGHT alfanumeric code.</p>
                                <p><b>$fra->tool->unique()</b><br>This function returns an unique code.</p>
                                <p><b>$fra->tool->string()</b><br>This function returns an unique string.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
          

                            <div class="col-xs-12">
                                <h4 id="ways">Ways <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></h4>
                                <p>The Francesca/Ways is routing tools</p>
                                <p><b>$fra->ways->getview()</b><br>This function includes current controller/action view into a layout;</p>
                                <p><b>$fra->ways->getsnip(NAME)</b><br>This function includes a page snippet everywehere.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            

                            <div class="col-xs-12">
                                <h4 id="text">Text <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></h4>
                                <p>The Francesca/Text is a set of fuctions useful for work with text</p>
                                <p><b>$fra->text->replace(TEXT, STRING, NEWSTRING)</b><br>This function replaces a STRING with a new STRING into a TEXT.</p>
                                <p><b>$fra->text->length(STRING)</b><br>This function returns the length of a string.</p>
                                <p><b>$fra->text->left(STRING, CHARS)</b><br>This function returns first CHARS of a STRING.</p>
                                <p><b>$fra->text->right(STRING, CHARS)</b><br>This function returns last CHARS of a STRING.</p>
                                <p><b>$fra->text->lefttrim(STRING, CHARS)</b><br>This function trims first CHARS of a STRING.</p>
                                <p><b>$fra->text->righttrim(STRING, CHARS)</b><br>This function trims last CHARS of a STRING.</p>
                                <p><b>$fra->text->truncate(STRING, CHARS, END)</b><br>This function truncates a string at a CHARS n° of letters and appends an end (ex. ...).</p>
                                <p><b>$fra->text->reverse(STRING)</b><br>This function returns a reversed STRING.</p>
                                <p><b>$fra->text->uppercase(STRING)</b><br>This function returns an uppercase STRING.</p>
                                <p><b>$fra->text->lowercase(STRING)</b><br>This function returns an lowercase STRING.</p>
                                <p><b>$fra->text->capitalize(STRING, OPTION)</b><br>This function returns a capitalize STRING (opt. 0) or a full words capitalize STRING (opt. 1).</p>
                                <p><b>$fra->text->wrap(STRING, CHARS, TAG)</b><br>This function inserts a TAG every CHARS in STRING.</p>
                                <p><b>$fra->text->words(STRING)</b><br>This function counts words in STRING.</p>
                                <p><b>$fra->text->brfromn(STRING)</b><br>This function returns STRING \ n into BR.</p>
                                <p><b>$fra->text->brton(STRING)</b><br>This function returns STRING BR into \ n.</p>
                                <p><b>$fra->text->slug(STRING, DELIMITER)</b><br>This function returns a SLUG from a STRING using a DELIMITER.</p>
                                <p><b>$fra->text->utf8(STRING)</b><br>This function returns an UTF-8 string.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            

                            <div class="col-xs-12">
                                <h4 id="form">Form <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></h4>
                                <p>The Francesca/Form is a set of functions for form validation</p>
                                <p><b>$fra->form->clean(STRING)</b><br>This function cleans a STRING from dangerous characters.</p>
                                <p><b>$fra->form->cleanlight(STRING)</b><br>This function cleans a STRING from dangerous characters (in light version).</p>
                                <p><b>$fra->form->isurl(STRING)</b><br>This function verifies if a string is an URL and returns a TRUE or FALSE value.</p>
                                <p><b>$fra->form->ismail(STRING)</b><br>This function verifies if a string is an E-MAIL and returns a TRUE or FALSE value.</p>
                                <p><b>$fra->form->isnotempty(STRING)</b><br>This function verifies if a string is not empty and returns a TRUE or FALSE value.</p>
                                <p><b>$fra->form->isanumber(STRING)</b><br>This function verifies if a string is a number and returns a TRUE or FALSE value.</p>
                                <p><b>$fra->form->isinto(STRING, WORD)</b><br>This function verifies if in a STRING there is one (or more) WORD returning TRUE or FALSE value.</p>
                                <p><b>$fra->form->ismim(STRING, LONG)</b><br>This function verifies if a STRING is minium LONG and returns TRUE or FALSE value.</p>
                                <p><b>$fra->form->ismax(STRING, LONG)</b><br>This function verifies if a STRING is maxium LONG and returns TRUE or FALSE value.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            

                            <div class="col-xs-12">
                                <h4 id="date">Date <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></h4>
                                <p>The Francesca/Date is a set of fuctions useful for work with dates</p>
                                <p><b>$fra->date->now()</b><br>This function returns current datetime in standard format as a string.</p>
                                <p><b>$fra->date->convert(DATE, TO FORMAT, FROM FORMAT)</b><br>This function converts date format using PHP date() standard formats of a declared DATE, FROM a format TO a new format.</p>
                                <p><b>$fra->date->days(DATE A, DATE B)</b><br>This function returns as a string the number of days beetweek two dates (better in Y-m-d format).</p>
                                <p><b>$fra->date->change(DATE, REQUEST, FORMAT)</b><br>This function returns as a string a new date based on an original date and based on a request.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                               
                            </div>

                            <div class="col-xs-12">
                                <h4 id="file">File <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></h4>
                                <p>The Francesca/File is a set of functions to manage files</p>
                                <p><b>$fra->file->exists(FILE)</b><br>This function verifies if a FILE exists and returns a TRUE or FALSE value.</p>
                                <p><b>$fra->file->extension(FILE)</b><br>This function returns a FILE extension.</p>
                                <p><b>$fra->file->read(FILE)</b><br>This function reads a FILE and returns a string.</p>
                                <p><b>$fra->file->create(FILE, CONTENT)</b><br>This function creates a FILE with a CONTENT and returns a string.</p>
                                <p><b>$fra->file->createdir(DIR)</b><br>This function creates a DIR.</p>
                                <p><b>$fra->file->delete(FILE)</b><br>This function deletes a FILE.</p>
                                <p><b>$fra->file->deletedir(DIR)</b><br>This function deletes a DIR.</p>
                                <p><b>$fra->file->list(DIR)</b><br>This function lists the files into a DIR and returns an array.</p>
                                <p><b>$fra->file->upload(DIR, EXTENSIONS)</b><br>This function uploads all $_FILES into a DIR verifing files EXTENSIONS (array) and returns an array of files names.</p>
                                <p><b>$fra->file->heading(TYPE, CUSTOM)</b><br>This function returns a custom file header.</p>
                                <p><b>$fra->file->forcedownload(FILE)</b><br>This function forces file download.</p>
                                <p><b>$fra->file->ftpget(LOCALFILE, REMOTEFILE)</b><br>This function lets you to download a remote FTP file into a local file.</p>
                                <p><b>$fra->file->ftpput(LOCALFILE, REMOTEFILE)</b><br>This function lets you to upload a local file into a remote FTP file.</p>
                                <p><b>$fra->file->ftpdel(FILE)</b><br>This function lets you to delete a remote FPT file.</p>
                                <p><b>$fra->file->ftpcreatedir(DIR)</b><br>This function lets you create a remote FTP dir.</p>
                                <p><b>$fra->file->ftpdeletedir(DIR)</b><br>This function lets you delete a remote FTP dir.</p>
                                <p><b>$fra->file->ftpdeletedir(DIR)</b><br>This function returns an FTP dir content array.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            

                            <div class="col-xs-12">
                                <h4 id="http">Http <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></h4>
                                <p>The Francesca/Http class manages all HTTP methods reqs.</p>
                                <p><b>$fra->http->to(METHOD, URL, DATA, HEADER)</b><br>This function sends DATA (array) to an URLwith a custom HEADER (array) through a METHOD.</p>
                                <p><b>$fra->http->from(METHOD, IP)</b><br>This function receives data trasmitted to page in a determinated METHOD from an optional list of IP (array or string).</p>
                                <p><b>$fra->http->response(CODE)</b><br>This function returns a custom CODE header.</p>
                                <p><b>$fra->http->responseget(URL)</b><br>This function gets and returns an URL header.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            

                            <div class="col-xs-12">
                                <h4 id="auth">Auth <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></h4>
                                <p>The Francesca/Auth provides a set of auth functions</p>
                                <p><b>$fra->auth->passwordhash(SECRET PASS)</b><br>This function creates an encrypted password based on BCRYPT algorit and return it as a string.</p>
                                <p><b>$fra->auth->passwordcheck(SECRET PASS, PASS HASH)</b><br>This function validates a BCRYPT encrypt password and return a TRUE or FALSE value.</p>
                                <p><b>$fra->auth->tokengenerate()</b><br>This function creates an univoque token, puts it in "fra_auth_token" server session and return it into a string.</p>
                                <p><b>$fra->auth->tokenverify(INPUT TOKEN)</b><br>This function verify the input token with the "fra_auth_token" session and return a TRUE or FALSE value. This function manages also "fra_auth_session_token" and "fra_auth_session_try".</p>
                                <p><b>$fra->auth->otpgenerate()</b><br>This function creates an temporaney otp code, puts it into a "fra_auth_otp" server session and return it as a string.</p>
                                <p><b>$fra->auth->otpverify(INPUT OTP)</b><br>This function verify the input opt with the "fra_auth_otp" and return TRUE or FALSE</p>
                                <p><b>$fra->auth->start(LEVEL)</b><br>This function start a login session and set an optional user level identify by a number putting all in 2 sessions: "fra_auth_session" and "fra_auth_level".</p>
                                <p><b>$fra->auth->verify(LEVEL)</b><br>This function validates user session and user level (optional) returning a TRUE or FALSE value.</p>
                                <p><b>$fra->auth->stop()</b><br>This function stops all user sessions.</p>
                                <p><b>$fra->auth->level()</b><br>This function returns user level into a string</p>
                                <p><b>$fra->auth->try(VALUE NUMBER)</b><br>This function adds a VALUE NUMBER to user try session.</p>
                                <p><b>$fra->auth->tryverify(MAX NUMBER)</b><br>This funcion verifies if max value of session try is equal to current user session try value and return TRUE or FALSE value.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            

                            <div class="col-xs-12">
                                <h4 id="data">Data <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></h4>
                                <p>As default, Francesca Framework includes an useful 3th parts ORM for MySql/sqlite connections called Medoo.<br>
                                    You can use all <a href="https://medoo.in/doc" target="_blank">Medoo APIs</a> through $fra->data pre-initialized object. All init configurations are into environment file.</p>

                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>


                        <div class="row">
                            

                            <div class="col-xs-12">
                                <h4 id="mail">Mail <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></h4>
                                <p>As default, Francesca Framework includes an useful 3th parts library to manage authenticated SMTP mail sender called PHPmailer.<br>
                                    You can use all <a href="https://github.com/PHPMailer/PHPMailer/wiki/Tutorial" target="_blank">PHPmailer APIs</a> through $fra->mail pre-initialized object. All init configurations are into environment file.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->


                     <section id="libraries" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Libraries <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <p>In every app you can create custom libraries or classes and use them into your cose</p>


                        <h4>How create a custom library</h4>
                        <p>Create a new library folder and php file into apps/Appname/libraries/Newlibname/Newlibname.php and intializied it with the same noun as namespace and class...
                        <pre class="brush: php">

                        // This is the Operations.php file
                        namespace Operations;
 
                        class Operations {

                            //here you can put your functions

                        }

                        </pre>
                        </p>
                        <p>Then you have to load it into apps/Appname/core.php page and register it into the singleton fra object.
                        <pre class="brush: php">
                        //for example
                        use Operations\Operations;
 
                        // Register as singleton object
                        $fra->operations(OPTIONAL INIT CONFIG);
                        </pre>
                        
                        Any libraries init configuration can be declared as $fra_config["VAR-NAME"] var into apps/Appname/config.php page.</p>

                    </section>
                    <!-- end section -->


                    <section id="3thparts" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">3th parts <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->


                        <h4>Install vendors</h4>
                        <p>To install a 3th parts lib you have to update dependences list into composer.json file with composer 3th parts libs packages names and runninng  into public root folder this SSH command:<pre>composer update</pre></p>


                        <h4>Singleton logic</h4>
                        <p>Francesca Framework provides singleton function to register a new singleton object. You can create and return 3th parts libs as object into the framework. You can do it into apps/Appname/core.php page. Any classes init configuration can be declared as $fra_config["VAR-NAME"] var into apps/Appname/config.php page.<br>
                            You can register it in this way:
                        <pre class="brush: php">
                        // Use Lib namespace
                        use Lib\Lib;
 
                        // Register as singleton object
                        $fra->lib(OPTIONAL INIT CONFIG);
                        </pre>
                        </p>
                        <p>
                        <b>Reserved objects names are: ways, data, mail, file, text, date, form, http, auth, tool and core.</b>
                        </p>

                    </section>
                    <!-- end section -->

                    <section id="cli" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">CLI tools <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                       <p>Francesca Framework provides an essential and minimal set of php CLI tools that you can use in SSH into public root folder.
                        <pre>
<b>php fra</b> - is a welcome messagge
<b>php fra help</b> - is an available commands list
<b>php fra list-envs</b> - is useful to read a list of environments and their routes structure
<b>php fra reset-ht</b> - is useful to restore original .htaccess file in case of problem
<b>php fra reset-log</b> - is useful to empty logs folder
<b>php fra create-env</b> - is useful to create envs files
<b>php fra create-app</b> - is useful to create apps folders
</pre>

                    </section>
                    <!-- end section -->

                    <section id="cdn" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">CDN tools <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                       <p>Andrea Pollastri (Francesca Framework creator) pubblished All You Can Cloud... a simple website that provieds you a set of tools, resources, assets and snippets useful to quickly and secure develop websites and webapps!<br>
                        You can easly create PDF, resize images, include Bootstrap framework, etc... try it... it's free! good work! :)<br><br>

                       <a href="https://allyoucan.cloud" target="_blank" class="btn btn-primary">Go to Website!</a>
                       </p>

                    </section>
                    <!-- end section -->

                    <section id="support" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Support <a href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a><hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-12">


                            	<p><b>You can find an updated documentation here: <a href="https://francesca.io" target="_blank">www.francesca.io</a>.</b><br>
                            	For any information/issue about Francesca Framework write an email at: <a href="mailto:mail@andreapollastri.net" target="_blank">mail@andreapollastri.net</a>.</p>.

                            </div>
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->
                </div>
                <!-- // end .col -->

            </div>
            <!-- // end .row -->

<?php $fra->ways->getsnip("doc_footer"); ?>