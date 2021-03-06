
#####################################################################################
#								FRANCESCA FRAMEWORK									#
#####################################################################################

#Header always append X-Frame-Options SAMEORIGIN
#Header set X-Content-Type-Options "nosniff"
#Header set X-XSS-Protection "1; mode=block"
#Header set X-Content-Security-Policy "allow 'self';"
###### Header set Strict-Transport-Security "max-age=31536000" env=HTTPS


########## START - FRANCESCA FRAMEWORK DIRECTIVE - DO NOT MODIFY ##########

IndexIgnore 		*
Options 			-Indexes
RewriteEngine 		On

RewriteBase 		/
RewriteRule 		^index\.php$ - [L]
RewriteCond 		%{REQUEST_FILENAME} !-f
RewriteCond 		%{REQUEST_FILENAME} !-d
RewriteRule 		. /index.php 		[L]

RewriteRule 		^apps/$  								/
RewriteRule 		^envs/$  								/
RewriteRule 		^libs/$  								/
RewriteRule 		^logs/$  								/
RewriteRule 		^task/$  								/
RewriteRule 		^temp/$  								/

RewriteRule 		^.*\.(sql|dump|log|dev|tmp|sqlite|db)$	/
RewriteRule 		^apps/.*\.(php)$  						/
RewriteRule 		^envs/.*\.(php)$  						/
RewriteRule 		^libs/.*\.(php)$  						/
RewriteRule 		^logs/.*\.(php)$  						/
RewriteRule 		^task/.*\.(php)$  						/
RewriteRule 		^temp/.*\.(php)$						/
RewriteRule 		^fra 									/
RewriteRule 		^FRA									/
RewriteRule 		^version								/
RewriteRule 		^VERSION								/
RewriteRule 		^licence								/
RewriteRule 		^LICENCE								/
RewriteRule 		^readme.md								/
RewriteRule 		^README.md								/
RewriteRule 		^composer.json							/
RewriteRule 		^composer.lock							/
RewriteRule 		^.htaccess								/
RewriteRule 		^.gitignore								/
RewriteRule 		^globals.php							/
RewriteRule 		^unit-test								/

ErrorDocument 100 	/index.php?fra_error=100
ErrorDocument 101 	/index.php?fra_error=101
ErrorDocument 200 	/index.php?fra_error=200
ErrorDocument 201 	/index.php?fra_error=201
ErrorDocument 202 	/index.php?fra_error=202
ErrorDocument 203 	/index.php?fra_error=203
ErrorDocument 204 	/index.php?fra_error=204
ErrorDocument 205 	/index.php?fra_error=205
ErrorDocument 206 	/index.php?fra_error=206
ErrorDocument 300 	/index.php?fra_error=300
ErrorDocument 301 	/index.php?fra_error=301
ErrorDocument 302 	/index.php?fra_error=302
ErrorDocument 303 	/index.php?fra_error=303
ErrorDocument 304 	/index.php?fra_error=304
ErrorDocument 305 	/index.php?fra_error=305
ErrorDocument 307 	/index.php?fra_error=307
ErrorDocument 401 	/index.php?fra_error=401
ErrorDocument 402 	/index.php?fra_error=402
ErrorDocument 403 	/index.php?fra_error=403
ErrorDocument 404 	/index.php?fra_error=403
ErrorDocument 405 	/index.php?fra_error=405
ErrorDocument 406 	/index.php?fra_error=406
ErrorDocument 407 	/index.php?fra_error=407
ErrorDocument 408 	/index.php?fra_error=408
ErrorDocument 409 	/index.php?fra_error=409
ErrorDocument 410 	/index.php?fra_error=410
ErrorDocument 411 	/index.php?fra_error=411	
ErrorDocument 412 	/index.php?fra_error=412
ErrorDocument 413 	/index.php?fra_error=413
ErrorDocument 414 	/index.php?fra_error=414
ErrorDocument 415 	/index.php?fra_error=415
ErrorDocument 416 	/index.php?fra_error=416
ErrorDocument 417 	/index.php?fra_error=417
ErrorDocument 500 	/index.php?fra_error=500
ErrorDocument 501 	/index.php?fra_error=501
ErrorDocument 502 	/index.php?fra_error=502
ErrorDocument 503 	/index.php?fra_error=503
ErrorDocument 504 	/index.php?fra_error=504
ErrorDocument 505 	/index.php?fra_error=505

########## END - FRANCESCA FRAMEWORK DIRECTIVE - DO NOT MODIFY ##########

RewriteCond %{QUERY_STRING} proc/self/environ [OR]
RewriteCond %{QUERY_STRING} mosConfig_[a-zA-Z_]{1,21}(=|\%3D) [OR]
RewriteCond %{QUERY_STRING} base64_encode.*(.*) [OR]
RewriteCond %{QUERY_STRING} (<|%3C).*script.*(>|%3E) [NC,OR]
RewriteCond %{QUERY_STRING} GLOBALS(=|[|\%[0-9A-Z]{0,2}) [OR]
RewriteCond %{QUERY_STRING} _REQUEST(=|[|\%[0-9A-Z]{0,2})
###### RewriteRule ^(.*)$ index.php [F,L]

<IfModule mod_rewrite.c>
	SetEnvIfNoCase ^User-Agent$ .*(craftbot|download|extract|stripper|sucker|ninja|clshttp|webspider|leacher|collector|grabber|webpictures) HTTP_SAFE_BADBOT
	SetEnvIfNoCase ^User-Agent$ .*(libwww-perl|aesop_com_spiderman) HTTP_SAFE_BADBOT
	Deny from env=HTTP_SAFE_BADBOT
</ifModule>

RewriteCond %{HTTP_USER_AGENT} ^BlackWidow [OR]
RewriteCond %{HTTP_USER_AGENT} ^Bot\ mailto:craftbot@yahoo.com [OR]
RewriteCond %{HTTP_USER_AGENT} ^ChinaClaw [OR]
RewriteCond %{HTTP_USER_AGENT} ^Custo [OR]
RewriteCond %{HTTP_USER_AGENT} ^DISCo [OR]
RewriteCond %{HTTP_USER_AGENT} ^Download\ Demon [OR]
RewriteCond %{HTTP_USER_AGENT} ^eCatch [OR]
RewriteCond %{HTTP_USER_AGENT} ^EirGrabber [OR]
RewriteCond %{HTTP_USER_AGENT} ^EmailSiphon [OR]
RewriteCond %{HTTP_USER_AGENT} ^EmailWolf [OR]
RewriteCond %{HTTP_USER_AGENT} ^Express\ WebPictures [OR]
RewriteCond %{HTTP_USER_AGENT} ^ExtractorPro [OR]
RewriteCond %{HTTP_USER_AGENT} ^EyeNetIE [OR]
RewriteCond %{HTTP_USER_AGENT} ^FlashGet [OR]
RewriteCond %{HTTP_USER_AGENT} ^GetRight [OR]
RewriteCond %{HTTP_USER_AGENT} ^GetWeb! [OR]
RewriteCond %{HTTP_USER_AGENT} ^Go!Zilla [OR]
RewriteCond %{HTTP_USER_AGENT} ^Go-Ahead-Got-It [OR]
RewriteCond %{HTTP_USER_AGENT} ^GrabNet [OR]
RewriteCond %{HTTP_USER_AGENT} ^Grafula [OR]
RewriteCond %{HTTP_USER_AGENT} ^HMView [OR]
RewriteCond %{HTTP_USER_AGENT} HTTrack [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Image\ Stripper [OR]
RewriteCond %{HTTP_USER_AGENT} ^Image\ Sucker [OR]
RewriteCond %{HTTP_USER_AGENT} Indy\ Library [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^InterGET [OR]
RewriteCond %{HTTP_USER_AGENT} ^Internet\ Ninja [OR]
RewriteCond %{HTTP_USER_AGENT} ^JetCar [OR]
RewriteCond %{HTTP_USER_AGENT} ^JOC\ Web\ Spider [OR]
RewriteCond %{HTTP_USER_AGENT} ^larbin [OR]
RewriteCond %{HTTP_USER_AGENT} ^LeechFTP [OR]
RewriteCond %{HTTP_USER_AGENT} ^Mass\ Downloader [OR]
RewriteCond %{HTTP_USER_AGENT} ^MIDown\ tool [OR]
RewriteCond %{HTTP_USER_AGENT} ^Mister\ PiX [OR]
RewriteCond %{HTTP_USER_AGENT} ^Navroad [OR]
RewriteCond %{HTTP_USER_AGENT} ^NearSite [OR]
RewriteCond %{HTTP_USER_AGENT} ^NetAnts [OR]
RewriteCond %{HTTP_USER_AGENT} ^NetSpider [OR]
RewriteCond %{HTTP_USER_AGENT} ^Net\ Vampire [OR]
RewriteCond %{HTTP_USER_AGENT} ^NetZIP [OR]
RewriteCond %{HTTP_USER_AGENT} ^Octopus [OR]
RewriteCond %{HTTP_USER_AGENT} ^Offline\ Explorer [OR]
RewriteCond %{HTTP_USER_AGENT} ^Offline\ Navigator [OR]
RewriteCond %{HTTP_USER_AGENT} ^PageGrabber [OR]
RewriteCond %{HTTP_USER_AGENT} ^Papa\ Foto [OR]
RewriteCond %{HTTP_USER_AGENT} ^pavuk [OR]
RewriteCond %{HTTP_USER_AGENT} ^pcBrowser [OR]
RewriteCond %{HTTP_USER_AGENT} ^RealDownload [OR]
RewriteCond %{HTTP_USER_AGENT} ^ReGet [OR]
RewriteCond %{HTTP_USER_AGENT} ^SiteSnagger [OR]
RewriteCond %{HTTP_USER_AGENT} ^SmartDownload [OR]
RewriteCond %{HTTP_USER_AGENT} ^SuperBot [OR]
RewriteCond %{HTTP_USER_AGENT} ^SuperHTTP [OR]
RewriteCond %{HTTP_USER_AGENT} ^Surfbot [OR]
RewriteCond %{HTTP_USER_AGENT} ^tAkeOut [OR]
RewriteCond %{HTTP_USER_AGENT} ^Teleport\ Pro [OR]
RewriteCond %{HTTP_USER_AGENT} ^VoidEYE [OR]
RewriteCond %{HTTP_USER_AGENT} ^Web\ Image\ Collector [OR]
RewriteCond %{HTTP_USER_AGENT} ^Web\ Sucker [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebAuto [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebCopier [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebFetch [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebGo\ IS [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebLeacher [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebReaper [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebSauger [OR]
RewriteCond %{HTTP_USER_AGENT} ^Website\ eXtractor [OR]
RewriteCond %{HTTP_USER_AGENT} ^Website\ Quester [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebStripper [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebWhacker [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebZIP [OR]
RewriteCond %{HTTP_USER_AGENT} ^Wget [OR]
RewriteCond %{HTTP_USER_AGENT} ^Widow [OR]
RewriteCond %{HTTP_USER_AGENT} ^WWWOFFLE [OR]
RewriteCond %{HTTP_USER_AGENT} ^Xaldon\ WebSpider [OR]
RewriteCond %{HTTP_USER_AGENT} ^Zeus
RewriteRule ^.* - [F,L]

<IfModule mod_deflate.c>
	<IfModule mod_headers.c>
		Header append Vary User-Agent env=!dont-vary
	</IfModule>
	AddOutputFilterByType DEFLATE text/css text/x-component application/x-javascript application/javascript text/javascript text/x-js text/html text/richtext image/svg+xml text/plain text/xsd text/xsl text/xml image/x-icon application/json
	<IfModule mod_mime.c>
		AddOutputFilter DEFLATE js css htm html xml
	</IfModule>
</IfModule>

<IfModule mod_expires.c>
	ExpiresActive On
	ExpiresByType image/jpeg						"access 1 year"
	ExpiresByType image/jpeg						"access 1 year"
	ExpiresByType image/gif							"access 1 year"
	ExpiresByType image/png							"access 1 year"
	ExpiresByType text/css							"access 1 month"
	ExpiresByType application/pdf					"access 1 month"
	ExpiresByType text/x-javascript					"access 1 month"
	ExpiresByType application/x-shockwave-flash		"access 1 month"
	ExpiresByType image/x-icon 						"access 1 year"
	ExpiresDefault 									"access 2 days"
</IfModule>

#####################################################################################
#								FRANCESCA FRAMEWORK									#
#####################################################################################