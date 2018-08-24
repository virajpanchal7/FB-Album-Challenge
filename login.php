<?php

/*
 * User: Viraj R. Panchal
 * Date: 12-08-2018
*/

	require_once "config.php";

	$redirectURL = "http://localhost/FB-Album-Challenge/fb-callback.php";
	$permissions = ['email'];
	$loginURL = $helper->getLoginURL($redirectURL, $permissions);
	//echo $loginURL;
?>

<!DOCTYPE html>
<html>
<head>

	<title>FB Login</title>
	<link rel="icon" href="images/icon.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

	<div class="container" style="margin-top: 100px;"">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<img src="images/logo.png"><br><br>
				<form>
					<input value="Log In With Facebook" type="button" onclick="window.location = '<?php echo $loginURL; ?>'" placeholder="password" class="btn btn-primary">
				</form>
			</div>
				
		</div>
	</div>

</body>
</html>