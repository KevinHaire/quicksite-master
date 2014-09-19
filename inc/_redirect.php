<?php
	$referer = $_SERVER["HTTP_REFERER"];
	$url = $_SERVER["HTTP_HOST"];

	if (strpos($referer,'shop') !== false || strpos($referer, $url) !== false) {
		$redirect = "false";
	}

	if ($redirect == "true") {
		$iphone  = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
		$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
		$berry   = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
		$ipod    = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

		if ($iphone || $android || $palmpre || $ipod || $berry == true)
		{
		    echo "<script>window.location='http://".$shopDomain."/mobile/index.cfm/redirect/".$bizId."'</script>";
		}
	}
?>
