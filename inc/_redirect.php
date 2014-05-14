<?php
	if ($redirect == "true") {
		$iphone  = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
		$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
		$berry   = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
		$ipod    = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

		if ($iphone || $android || $palmpre || $ipod || $berry == true) 
		{
		    echo "<script>window.location='http://www.".$shopDomain."/mobile/index.cfm/redirect/".$bizId."'</script>";
		}
	}
?>