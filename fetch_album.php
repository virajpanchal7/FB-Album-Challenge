<?php

/*
 * User: Viraj R. Panchal
 * Date: 16-08-2018
*/
	session_start();

	if( !isset($_SESSION['access_token'])) {
		header("Location: login.php");
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Album</title>
	<link rel="icon" href="images/icon.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<div class="row justify-content-center">

			<div class="col-md-9" style="margin-top: 30px; color: #666666" align="center">
				<p class="h1"><u>User Albums</u></p>
			</div>

			
			<div class="col-md-9" style="margin-top: 20px; color: #666666" align="center">

	      	<table class="table table-hover">
		      	<?php 

					foreach($_SESSION['userData']['albums'] as $data){
						
						    $id = isset($data['id'])?$data['id']:'';
						    $name = isset($data['name'])?$data['name']:'';
							$count = isset($data['count'])?$data['count']:'';

							echo "<tr>";
								echo "<td>
										<div class='checkbox'>
												<input type='checkbox' value=''>";
									echo $name . ", " . $count . "<br><br>";
								echo "</div></td>";

								echo "<td>";
								foreach($data as $pic){
						
									$url = isset($pic['url'])?$pic['url']:'';
									
									echo "<a href = 'view_photos.php'>
			  									<img src='" . $url . "'' width='75px' height='75px' alt='" . $url ."'>
		   								  </a>";			
		   							
								}
								echo "</td>";

								echo "<td>";
									echo "<a href='download_album.php'>
											<img src='Images/download.png' width='75px'  height='75px' align='center' alt='download album' name='download_single'>
											</a>";
								echo "</td>";
							echo "</tr>";
					}

				?>
	  		</table>

	  		<div class="col-md-9" align="center">
				<button type="button" class="btn btn-primary" onclick="window.location='download_album.php'">Download Selected</button>

				<button type="button" class="btn btn-primary" onclick="window.location='download_album.php'">Download All</button>
			</div>
						  
			</div>
			<div class="col-md-9" align="right">
				<?php include "footer.php"; ?>
			</div>
		</div>
	</div>
</body>
</html>