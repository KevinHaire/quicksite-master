<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="http://<?php echo $assetDomain; ?><?php echo $cssPath; ?>"/>
<link rel="stylesheet" type="text/css" href="css/styleVars.php"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<?php
  if (!isset($_GET['pageName'])) {
    if (file_exists('inc/titles/Home.php')) {
      include 'inc/titles/Home.php';
    } else {
      echo '<title>'.$bizName.' | '.$bizCity.' | '.$bizProvince.' | '.$page.'</title>';
    }
  }
  if (isset($_GET['pageName'])) {
    if (file_exists('inc/titles/'.$_GET['pageName'].'.php')) {
      include 'inc/titles/'.$_GET['pageName'].'.php';
    } else {
      echo '<title>'.$bizName.' | '.$bizCity.' | '.$bizProvince.' | '.$page.'</title>';
    }
  }
?>
