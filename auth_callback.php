<?php
include('config.php');

//Ensure the state matches up
if($_REQUEST['state'] == $_SESSION['oauth_state']) {
	// redirect_uri must be provided, and must match your configured uri
	$response = $vimeo->accessToken($_GET['code'], $redirect_uri);

	echo '<pre>';
	    //var_dump($token);
		// usable access token
		var_dump($response['body']['access_token']);

		// accepted scopes
		var_dump($response['body']['scope']);

		// authenticated user
		var_dump($response['body']['user']);

		//store the access token
		$_SESSION['vimeo_access_token'] = $response['body']['access_token'];

		// use the token
		$vimeo->setToken($_SESSION['vimeo_access_token']);

		//use the api
		$response = $vimeo->request('/me/videos', array('per_page' => 2), 'GET');

		var_dump($response);
	echo '</pre>';
	//
	//see https://github.com/vimeo/vimeo.php
	//for mor examples
	//
} else {
	echo 'Error: state mismatch '.$_SESSION['state'];
}