<?php
	header("Access-Control-Allow-Origin: *");
	include $sitePath.'/../config/_array.php';
	include $masterPath.'/config/_vars.php';
	if ($formValues["password"] && !$_COOKIE["login"]) {
		header('Location: login.php');
	}
	if (isset($_GET["success"])) {
		include $masterPath.'/setup/_success.php';
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://www.shopcitywebsites.com/assets/css/setup.min.css"/>
	<title>Custom Website Setup</title>
</head>
<body>

	<?php include $masterPath.'/setup/inc/_header.php' ?>

	<section class="instructions">
		<div class="contain">
			<p>This is the configuration of your ShopCity.com website. If you encounter any problems please send us an <a href="mailto:khaire@shopcity.com">e-mail</a>.</p>
		</div>
	</section>

	<form action="_formProcessor.php" method="post" enctype="multipart/form-data">

		<?php include $masterPath.'/setup/inc/form/_businessSetup.php' ?>

		<?php include $masterPath.'/setup/inc/form/_socialMedia.php' ?>

		<?php include $masterPath.'/setup/inc/form/_navigation.php' ?>

		<?php include $masterPath.'/setup/inc/form/_slider.php' ?>

		<?php include $masterPath.'/setup/inc/form/_styling.php' ?>

		<?php include $masterPath.'/setup/inc/form/_analytics.php' ?>

		<?php include $masterPath.'/setup/inc/form/_footer.php' ?>

	</form>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src='http://www.shopcitywebsites.com/assets/js/setup.script.build.js'></script>

</body>
</html>
