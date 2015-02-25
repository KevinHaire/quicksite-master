<?php 
include $sitePath.'/config/_array.php';
include $masterPath.'/config/_vars.php';
?>
<!DOCTYPE HTML>
<html>
<head>

<?php 
include $masterPath.'/views/common/_head.php';
?>

</head>

<body ng-app="quicksite">

	<?php include $masterPath.'/views/common/_header.php' ?>

	<div class="contain padding mainContainer">
		<?php include $masterPath.'/inc/_webtools.php' ?>
	</div>

	<?php include $masterPath.'/views/common/_footer.php' ?>
</body>

</html>

