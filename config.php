<?php

//set error_reporting
error_reporting(E_ERROR | E_PARSE);

//kick of sessions
session_start();

//Get composer files
require __DIR__ . '/vendor/autoload.php';

$client_id = '0a59f19557d356b8f1befaf11668e8bb1110cd6a';
$client_secret = 'WH79/GJMjt61leS4ltvjzeO/uimQYYebZK0nm5pxJRe8BrQvlPIQ+CwaOUVHyUASx3rVfOj2JUoSfajWZH2cRBTNgt937XpDAQdl7154jrr+xsGSUNrjtofUvyVC1REl';
//make it easier to reference vimeo api
$vimeo = new \Vimeo\Vimeo($client_id, $client_secret);

//where the user is redirected back to after being authed
$redirect_uri = 'http://bink.dev/index-2.php';
//the permissions being reqeuested
$scopes = [
	'public', 
//	'private', 
//	'purchased', 
//	'create', 
//	'edit', 
//	'delete', 
//	'interact', 
//	'upload'
];