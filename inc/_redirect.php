<?php
	$currentUrl = "http://$_SERVER[HTTP_HOST]";
	if (isset($_GET['page'])) {
		echo "<script>window.location='".$currentUrl."'</script>";
	} else {
		include $masterPath.'/views/home.php';
	}
?>