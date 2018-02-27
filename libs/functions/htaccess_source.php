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