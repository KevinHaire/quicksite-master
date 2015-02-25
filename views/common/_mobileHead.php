<?php
  if (!isset($_GET['pageName'])) {
    if (file_exists('inc/meta/Home.php')) {
      include 'inc/meta/Home.php';
    }
  }
  if (isset($_GET['pageName'])) {
    include 'inc/meta/'.isset($_GET['pageName']).'.php';
  }
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="http://www.shopcitywebsites.com/assets/css/mobile.min.css"/>
<link rel="stylesheet" type="text/css" href="css/styleVars.php"/>
<?php
  if (!isset($_GET['pageName'])) {
    if (file_exists('inc/titles/Home.php')) {
      include 'inc/titles/Home.php';
    } else {
      echo '<title>'.$bizName.' | '.$bizCity.' | '.$bizProvince.' | '.$page.'</title>';
    }
  }
  if (isset($_GET['pageName'])) {
    if (file_exists('inc/titles/'.isset($_GET['pageName']).'.php')) {
      include 'inc/titles/'.isset($_GET['pageName']).'.php';
    } else {
      echo '<title>'.$bizName.' | '.$bizCity.' | '.$bizProvince.' | '.$page.'</title>';
    }
  }
?>
