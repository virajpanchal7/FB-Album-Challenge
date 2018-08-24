<?php

/*
 * User: Viraj R. Panchal
 * Date: 12-08-2018
*/

	require_once "config.php";

	try {
	  $accessToken = $helper->getAccessToken();
	} catch(lib\Facebook\Exceptions\FacebookResponseException $e) {
	  // When Graph returns an error
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
	} catch(lib\Facebook\Exceptions\FacebookSDKException $e) {
	  // When validation fails or other local issues
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
	}

	if (! isset($accessToken)) {
		  if ($helper->getError()) {
		    header('HTTP/1.0 401 Unauthorized');
		    echo "Error: " . $helper->getError() . "\n";
		    echo "Error Code: " . $helper->getErrorCode() . "\n";
		    echo "Error Reason: " . $helper->getErrorReason() . "\n";
		    echo "Error Description: " . $helper->getErrorDescription() . "\n";
		  } else {
		    header('HTTP/1.0 400 Bad Request');
		    echo 'Bad request';
		  }
		  exit;
	}

	$oAuth2Client = $FB->getOAuth2Client();
	if (! $accessToken->isLongLived()) 
		    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);		  

	$response = $FB->get("me?fields=id,first_name,last_name,email,gender,picture.type(large),albums{id,name,count,cover_photo{id},picture{url},photos{source,images}}",$accessToken);
	
	$userData = $response->getGraphNode()->asArray();

	//echo "<pre>";
	//var_dump($userData);

	$_SESSION['userData'] = $userData;
	$_SESSION['userData1'] = $userData1;
	$_SESSION['access_token'] = (string) $accessToken;

	header('Location: index.php');
	exit();
	

	
?>


