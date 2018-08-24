<?php

/*
 * User: Viraj R. Panchal
 * Date: 12-08-2018
*/

	session_start();

	require_once "lib/Facebook/autoload.php";

	$FB = new Facebook\Facebook([
		'app_id' => 'XXXXXXXXXXXXXXXX',
		'app_secret' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
		'default_graph_version' => 'v3.10'
	]);

	$helper = $FB->getRedirectLoginHelper();
	if (isset($_GET['state'])) {
    	$helper->getPersistentDataHandler()->set('state', $_GET['state']);
	}
?>