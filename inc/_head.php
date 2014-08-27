<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
  if (!$_GET['pageName']) {
    include 'inc/meta/Home.php';
  } else {
    include 'inc/meta/'.$_GET['pageName'].'.php';
  }
?>
<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="http://www.shopcitywebsites.com/assets/css/global.min.css"/>
<link rel="stylesheet" type="text/css" href="css/styleVars.php"/>
<?php
  if (!$_GET['pageName']) {
    include 'inc/titles/Home.php';
  } else {
    include 'inc/titles/'.$_GET['pageName'].'.php';
  }
?>
