<?php

/*
 * User: Viraj R. Panchal
 * Date: 22-08-2018
*/
    session_start();

    if( !isset($_SESSION['access_token'])) {
        header("Location: login.php");
        exit();
    }

   	$zip_folder = "";
   	$album = $_SESSION['userData']['albums'];
	foreach($album as $data){
		
			$id = isset($data['id'])?$data['id']:'';
			$name = isset($data['name'])?$data['name']:'';
			$album_download_directory = 'lib/Albums/'. $name .'/';

			if (!file_exists($album_download_directory) && !is_dir($album_download_directory)) {
 				   mkdir($album_download_directory);         
			}


			if (isset($_POST['download_single'])){

				downloadAlbum($id);
				//make_zip();
			}

	}

	function url_get_contents ($Url) {
		if (!function_exists('curl_init')){
			die('CURL is not installed!');
		}
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $Url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec($ch);
		curl_close($ch);
		return $output;
	}

	function downloadAlbum($album_id){
		global $fb;
		global $download_location;
		try {
			$photos_request = $fb->get('/'.$album_id.'/photos?fields=source');
			$photos = $photos_request->getGraphEdge();
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
			echo 'Graph returned an error: ' . $e->getMessage();
			exit;
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
			echo 'Facebook SDK returned an error: ' . $e->getMessage();
			exit;
		}
		$response = $fb->get('/'.$album_id.'?fields=id,name');
		$album = $response->getGraphObject();
		$album_location = $download_location.$album['name'];
		if (!file_exists($album_location)) {
			mkdir($album_location, 0777);
		}
		do{
			foreach ($photos as $photo) {
				file_put_contents( $album_location.'/'.uniqid().".jpg", url_get_contents( $photo['source']) );
			}
			$photos = $fb->next($photos);
		}while(!is_null($photos));
	}

?>