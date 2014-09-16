<?php
	include '../config/_array.php';
	if ($_POST["loginPassword"] == $formValues["password"]) {
		setcookie("login", "1");
		header('Location: index.php');
	}
	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://www.shopcitywebsites.com/assets/css/setup.min.css"/>
	<title>Please Login</title>
	<style>
		@font-face {
			font-family: 'hero';
			src: url('fonts/hero-webfont.eot');
			src: url('fonts/hero-webfont.eot?#iefix') format('embedded-opentype'),
					url('fonts/hero-webfont.woff') format('woff'),
					url('fonts/hero-webfont.ttf') format('truetype'),
					url('fonts/hero-webfont.svg#heroregular') format('svg');
			font-weight: normal;
			font-style: normal;
		}
	</style>
</head>
<body>


	<?php include $masterPath.'/setup/inc/_header.php' ?>

	<section>
		<h2>Please enter your password</h2>
		<form action="login.php" method="post">
			<label for="loginPassword">password:</label>
			<input id="password" type="password" name="loginPassword" autofocus>
			<div class="submit">
				<input type="submit" value="submit" />
			</div>
		</form>		
	</section>

</body>
</html>
