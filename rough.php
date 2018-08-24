foreach($userData['albums'] as $data){
	    
	    $id = isset($data['id'])?$data['id']:'';
	    $name = isset($data['name'])?$data['name']:'';
		
		echo $id . "_" . $name . "<br>";	    
	    
	    
}


"<img src=" . $_SESSION['userData']['picture']['url'] . 
<a href='#'>" . $name . " </a> Photos : " . $count . "<br><br>";	  

/*$pictureLink = "photos.php?album_id={$id}&album_name={$name}";
	    
	    echo "<a href='{$pictureLink}'>";
	    echo "<img src='https://graph.facebook.com/v3.1/{$cover_photo_id}/picture?access_token={$accessToken}' alt=''>";
	    echo "</a>";
	    echo "<h3>{$name}</h3>";
	 
	    $photoCount = ($count > 1)?$count. 'Photos':$count. 'Photo';
	    
	    echo "<p><span style='color:#888;'>{$photoCount} / <a href='{$link}' target='_blank'>View on Facebook</a></span></p>";
	    echo "<p>{$description}</p>";
*/

<?php

				foreach($_SESSION['userData']['albums'] as $data){
	    
				    $id = isset($data['id'])?$data['id']:'';
				    $name = isset($data['name'])?$data['name']:'';
					
					echo $id . "_" . $name . "<br>";	    
				}
			?>


/*foreach($userData['albums'] as $data){
	    
	    $id = isset($data['id'])?$data['id']:'';
	    $name = isset($data['name'])?$data['name']:'';
	    $count = isset($data['count'])?$data['count']:'';
	    //$picture = isset($data['picture'])?$data['picture']:'';
		
		echo $count . " : " . $name . "<br>";
		foreach($data['picture'] as $p){
			$url = isset($data['url'])?$data['url']:'';

			echo $url . "<br>";
	    }
	    
	}*/










foreach($_SESSION['userData']['albums'] as $data){
	    
								    $id = isset($data['id'])?$data['id']:'';
								    $name = isset($data['name'])?$data['name']:'';
									$count = isset($data['count'])?$data['count']:'';

									echo "<img src=" . $_SESSION['userData']['picture']['url'] . " width='75px'>
									<a href='#'>" . $name . "</a>" . ", Photos : " . $count . "<br><br>";
							}

foreach($_SESSION['userData']['albums'] as $data){
	    
								    $id = isset($data['id'])?$data['id']:'';
								    $name = isset($data['name'])?$data['name']:'';
									$count = isset($data['count'])?$data['count']:'';

									foreach($data as $pic){

										$url = isset($pic['url'])?$pic['url']:'';

										echo "<img src=" . $url . " width='75px'>
										<a href='#'>" . $name . "</a>" . ", Photos : " . $count . "<br><br>";
									}
							}


foreach($_SESSION['userData']['albums'] as $data){
	    
								    $id = isset($data['id'])?$data['id']:'';
								    $name = isset($data['name'])?$data['name']:'';
									$count = isset($data['count'])?$data['count']:'';

									foreach($data as $pic){

										$url = isset($pic['url'])?$pic['url']:'';
										echo "<a href = 'download_album.php'>
												<img src=" . $url . ">
											  </a>
												<br><br>";
						
									}
							}


							picture{url}


							foreach($_SESSION['userData']['albums'] as $data){
	    
								    $id = isset($data['id'])?$data['id']:'';
								    $name = isset($data['name'])?$data['name']:'';
									$count = isset($data['count'])?$data['count']:'';

									echo $name;
									foreach($data as $pic){

										$url = isset($pic['url'])?$pic['url']:'';
										echo "<a href = 'download_album.php'>
												<img src=" . $url . " alt = >
											  </a>";
									}

							}

							<!--<button type="button" class="btn btn-primary" onclick="window.location='logout.php'">Logout</button>-->


<!DOCTYPE html>
<html>
<head>
	<title>Album Photos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	 <script type="text/javascript">
		var mainSlider;
		
		$(document).ready(function(){		  
			$('#slides').superslides({
				hashchange: false,
				play: 2000,
				//animation: 'fade',
				//animation_speed: 1000,
				//inherit_height_from: slider,
			});
			
			$('#slides').on('mouseenter', function() {
				$(this).superslides('stop');
				console.log('Stopped')
			});
			$('#slides').on('mouseleave', function() {
				$(this).superslides('start');
				console.log('Started')
			});
		});
		</script>

</head>
<body>

	<!--<div id="back_btn" style="position:absolute;right:50px;top:40px; z-index:9999;"><a href="<?php //echo ROOT_PATH.'home.php'; ?>" title="Maximize"><img src="<?php //echo IMAGES_PATH; ?>backbutton.png"></a></div>
    	<?php
		//if(isset($album_photos) && is_array($album_photos['data']) && count($album_photos['data']) > 0){
		?>-->
    	<div id="slides">
            <div class="slides-container">
            	<?php
				//foreach($album_photos['data'] as $photos){
					//echo '<img src="'.$photos['images'][0]['source'].'" width="1024" height="682" alt="" />';
				//}
				?>
            </div>
        
            <nav class="slides-navigation">
                <a href="" class="next">Next</a>
                <a href="" class="prev">Previous</a>
            </nav>
        </div>
        <?php
		//}
		?>

</body>
</html>


foreach($userData['albums'] as $data){
						
	    //$id = isset($data['id'])?$data['id']:'';
	    //$name = isset($data['name'])?$data['name']:'';
		//$count = isset($data['count'])?$data['count']:'';

		foreach($data['photos'] as $pic){

			$source = isset($pic['source'])?$pic['source']:'';
			
			echo "<img src='" . $source . "'' width='100px' alt='" . $source ."'><br>";
					
		}
	}





	/*echo "<table>";
	foreach($userData['albums'] as $data){
		echo "<tr>";
		
		foreach($data['photos'] as $photo){

			$id = isset($photo['id'])?$photo['id']:'';
			$source = isset($photo['source'])?$photo['source']:'';
				
			//echo "<td>
					//<img src='" . $source . "'' width='75px'  height='75px' alt='" . $source ."'>
				  //</td>";

			echo $source . "<br>";

		}
		echo "</tr>";
	}
	echo "<table>";
	


		$response1 = $FB->get("me?fields=albums{photos{source}}",$accessToken);
	
	$userData1 = $response1->getGraphNode()->asArray();

	echo "<pre>";
	var_dump($userData);

	/*$images = array();
	$name = "";
	foreach($userData1['albums'] as $data){
	    //echo "1";
	    /*$imageData = isset($data['images'])?$data['images']:'';
	    echo $imageData;
	    $imgSource = isset($data['source'])?$data['source']:'';
	    echo $imgSource ."<br>";
	    
	    //extract only the url
	    //$imageUrl = substr($imgSource, 0, strpos($imgSource, "?"));
	    
	    //$images[] = $imageUrl;
	    //$images[] = $imgSource;
	    $name = isset($data['name'])?$data['name']:'';
	    echo $name;

	    foreach($data as $photo){

				    		//$imageData = isset($data['images'])?$data['images']:'';
				    		//echo $imageData;
						    $imgSource = isset($data['source'])?$data['source']:'';
						    echo $imgSource ."<br>";
				    
						    //$images[] = $imageUrl;
	    					$images[] = $imgSource;
		}
	    
	}*/

		

		$response1 = $FB->get("/me/albums?fields=id,data",$accessToken);

	$albums = $response1->getGraphEdge()->asArray();
	echo "<pre>";
	var_dump($albums);

	if ( !empty( $albums ) ) {
		foreach ( $albums['data'] as $album ) {
			$album = (array) $album;
				$request_album_photos = new FacebookRequest( $session,'GET', '/'.$album['id'].'/photos?fields=source' );
				$response_album_photos = $request_album_photos->execute();			
				$album_photos = $response_album_photos->getGraphObject()->asArray();
				if ( !empty( $album_photos ) ) {  ?>
				<div class="demo-gallery">
					<ul id="lightgallery<?php echo $album['id'];?>" class="list-unstyled row albm-thmb thmb-light col-sm-3 col-xs-12">
				<?php
					foreach ( $album_photos['data'] as $album_photo ) {
						$album_photo = (array) $album_photo;
						$cover_photo = $album['cover_photo']->id;
						if ( $cover_photo == $album_photo['id'] ) {
							$album_cover_photo = $album_photo['source'];
							$album_resized_cover_photo = $album_cover_photo;
						?>
						<li data-src="<?php echo $album_resized_cover_photo;?>">
							<div class="thumbnail no-border center">
								
								<a href="<?php echo $album_photo['source'];?>" rel="<?php echo $album['id'];?>">
								  <img src="<?php echo $album_resized_cover_photo;?>" class="thm image-responsive img-rounded" alt="<?php echo $album['name'];?>" />
								</a>
								<div class="caption">
									<input type="checkbox" class="select-album" title="select album" value="<?php echo $album['id'].','.$album['name'];?>" />
									<?php $alb_nm = mb_substr($album['name'], 0, 15); ?>
									<h4><?php echo $alb_nm.' ('.count($album_photos['data']).')';?></h4>
									<button rel="<?php echo $album['id'].','.$album['name'];?>" class="single-download" title="Download Album">
										<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
									</button>
								</div>
							</div>
						</li>
						<?php
						} else {
						?>
							<li data-src="<?php echo $album_photo['source'];?>" style="display:none;">
								<a href="<?php echo $album_photo['source'];?>"  rel="<?php echo $album['id'];?>" style="display:none;">
									<img src="<?php echo $album_photo['source'];?>" alt="<?php echo $album['name'];?>" />
								</a>	
							</li>
							<!-- <a href="<?php echo $album_photo['source'];?>"  rel="<?php echo $album['id'];?>" style="display:none;"></a> -->
						<?php
						}
					} ?>
														 </ul>
				</div>
					<?php
				}
			}
		}
	

	
	//------------Download Function------------------------

	/*function download_album($session, $album_download_directory, $album_id, $album_name) {
		$request_album_photos = new FacebookRequest($session,'GET', '/'.$album_id.'/photos?fields=source');
		$response_album_photos = $request_album_photos->execute();			
		$album_photos = $response_album_photos->getGraphObject()->asArray();
		$album_directory = $album_download_directory.$album_name;
		if ( !file_exists( $album_directory ) ) {
			mkdir($album_directory, 0777);
		}
		$i = 1;
		foreach ( $album_photos['data'] as $album_photo ) {
			$album_photo = (array) $album_photo;
			file_put_contents( $album_directory.'/'.$i.".jpg", fopen( $album_photo['source'], 'r') );
			$i++;
		}
	}
	
	//------------FOR 1 Album DOWNLOAD......................

	if ( isset( $_GET['single_album'] ) && !empty ( $_GET['single_album'] ) ) {
		$single_album = explode( ",", $_GET['single_album'] );
		download_album( $album, $album_download_directory, $single_album[0], $single_album[1] );
	}*/