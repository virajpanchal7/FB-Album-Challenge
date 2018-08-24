<?php

/*
 * User: Viraj R. Panchal
 * Date: 18-08-2018
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
	<title>Album Photos</title>
	<link rel="icon" href="images/icon.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<div class="row justify-content-center">

			<div class="col-md-9" style="margin-top: 30px; color: #666666" align="center">
				<p class="h1"><u>Album Photos</u></p>
			</div>

			
			<div class="col-md-9" style="margin-top: 20px; color: #666666" align="center">

	      	<table class="table table-hover">
		      	<?php

		      		$albums = $_SESSION['userData']['albums'];

					foreach($albums as $data){

						echo "<tr>";
						$photos = $data['photos'];
				
						foreach($photos as $photo){

							$id = isset($photo['id'])?$photo['id']:'';
							$source = isset($photo['source'])?$photo['source']:'';
								
							echo "<td>
										<img src='" . $source . "'' width='75px'  height='75px' object-fit='cover' alt='" . $source ."'>			
								  </td>";

						}
						echo "</tr>";
					}

				?>
	  		</table>
						  
			</div>
			<div class="col-md-9" align="right">
				<?php include "footer.php"; ?>
			</div>
		</div>
	</div>
</body>
</html>