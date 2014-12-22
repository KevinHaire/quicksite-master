<?php 
// if (!isset($_GET["page"])) {
// 	header('Location: index.php');
// }
include $sitePath.'/config/_array.php';
include $masterPath.'/config/_vars.php';
include $masterPath.'/inc/_redirect.php';
?>
<!DOCTYPE HTML>
<html>
<head>

<?php 
include $masterPath.'/inc/_head.php';
?>

</head>

<body ng-app="qsCart">

	<?php include $masterPath.'/inc/_header.php' ?>

	<div class="contain padding mainContainer">
		<?php include $masterPath.'/inc/_webtools.php' ?>
	</div>

	<?php include $masterPath.'/inc/_footer.php' ?>
</body>

</html>

