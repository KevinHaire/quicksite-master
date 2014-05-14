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
	<link rel="stylesheet" type="text/css" href="../css/setup.css"/>
	<title>Please Login</title>
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
