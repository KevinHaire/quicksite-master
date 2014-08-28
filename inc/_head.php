<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
  if (!$_GET['pageName']) {
    if (file_exists('inc/meta/Home.php')) {
      include 'inc/meta/Home.php';
    }
  }
  if ($_GET['pageName']) {
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
    if (file_exists('inc/titles/Home.php')) {
      include 'inc/titles/Home.php';
    } else {
      echo '<title>'.$bizName.' | '.$bizCity.' | '.$bizProvince.' | '.$page.'</title>';
    }
  }
  if ($_GET['pageName']) {
    if (file_exists('inc/titles/'.$_GET['pageName'].'.php')) {
      include 'inc/titles/'.$_GET['pageName'].'.php';
    } else {
      echo '<title>'.$bizName.' | '.$bizCity.' | '.$bizProvince.' | '.$page.'</title>';
    }
  }
?>
