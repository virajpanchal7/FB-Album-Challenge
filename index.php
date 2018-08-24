<?php

/*
 * User: Viraj R. Panchal
 * Date: 12-08-2018
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

	<title>User Profile</title>
	<link rel="icon" href="images/icon.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<div class="row justify-content-center">

			<div class="col-md-9" style="margin-top: 30px; color: #666666" align="center">
				<p class="h1"><u>User Profile</u></p>
			</div>

			<div class="col-md-9" style="margin-top: 20px;" align="center">
				<img src="<?php echo $_SESSION['userData']['picture']['url'] ?>"  width="130px"><br><br>
			</div>
			<div class="col-md-9">
				<table class="table table-hover">
					  <tbody>
					    <tr>
					      <td>ID</td>
					      <td><?php echo $_SESSION['userData']['id'] ?></td>
					    </tr>
					    <tr>
					      <td>First Name</td>
					      <td><?php echo $_SESSION['userData']['first_name'] ?></td>
					    </tr>
					    <tr><td>Last Name</td>
					      <td><?php echo $_SESSION['userData']['last_name'] ?></td>
					    </tr>
					    <tr>  
					      <td>Email</td>
					      <td><?php echo $_SESSION['userData']['email'] ?></td>
					    </tr>
						<tr>  
					      <td>Gender</td>
					      <td><?php echo $_SESSION['userData']['gender'] ?></td>
					    </tr>
					    <tr>  
					      <td>Albums</td>
					      <td><button type="button" class="btn btn-link" onclick="window.location='fetch_album.php'">Go To Album</button>
					      </td>
					    </tr>
					  </tbody>
				</table>	
			</div>	
			<div class="col-md-9" align="right">
				<?php include "footer.php";?>
			</div>
		</div>
	</div>

</body>
</html>