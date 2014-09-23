<?php
	$currentUrl = "http://$_SERVER[HTTP_HOST]";
	$fullSiteCookie = isset($_COOKIE["fullSite"]);

	if ($fullSiteCookie) {
		$redirect = "false";
	}

	if ($redirect == "true") {
		$iphone  = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
		$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
		$berry   = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
		$ipod    = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

		if ($iphone || $android || $palmpre || $ipod || $berry == true) {
			if (isset($_GET['page'])) {
				echo "<script>window.location='".$currentUrl."'</script>";
			} else {
				include $masterPath.'/views/homeMobile.php';
			}
		}  else {
			if (!isset($_GET['page'])) {
				include $masterPath.'/views/home.php';
			}
		}
	} else {
		if (!isset($_GET['page'])) {
			include $masterPath.'/views/home.php';
		}
	}


?>