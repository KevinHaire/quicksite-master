<?php

//CREATES FILES FOR META TAGS
$files = glob('../inc/meta/*');
foreach($files as $file) {
  if(is_file($file))
    unlink($file);
}

for ($i=0; $i < sizeof($navObjects); $i++) {
  $metaOutput = '<meta name="description" content="'.$navObjects[$i]['metaDescription'].'">';

  if ($navObjects[$i]['type'] == 'home') {
    $filename = '../inc/meta/Home.php';
  } else {
    $filename = '../inc/meta/'.$navObjects[$i]['title'].'.php';
  }

  $dirname = dirname($filename);
  if (!is_dir($dirname))
  {
      mkdir($dirname, 0755, true);
  }

  if ($navObjects[$i]['type'] == 'home') {
    $fp = fopen('../inc/meta/Home.php', 'w');
  } else {
    $fp = fopen('../inc/meta/'.$navObjects[$i]['title'].'.php', 'w');
  }
  fwrite($fp, $metaOutput);
  fclose($fp);
}

//CREATES FILES FOR TITLE TAGS
$files = glob('../inc/titles/*');
foreach($files as $file) {
  if(is_file($file))
    unlink($file);
}

for ($i=0; $i < sizeof($navObjects); $i++) {
  $metaOutput = '<title>'.$navObjects[$i]['pageTitle'].'</title>';

  if ($navObjects[$i]['type'] == 'home') {
    $filename = '../inc/titles/Home.php';
  } else {
    $filename = '../inc/titles/'.$navObjects[$i]['title'].'.php';
  }

  $dirname = dirname($filename);
  if (!is_dir($dirname))
  {
      mkdir($dirname, 0755, true);
  }

  if ($navObjects[$i]['type'] == 'home') {
    $fp = fopen('../inc/titles/Home.php', 'w');
  } else {
    $fp = fopen('../inc/titles/'.$navObjects[$i]['title'].'.php', 'w');
  }
  fwrite($fp, $metaOutput);
  fclose($fp);
}


$navOutput = '<ul>'.chr(10);
for ($i=0; $i < sizeof($navObjects); $i++) {
  if ($navObjects[$i]['type'] == 'photos') {
    $navLink = 'page.php?page=photos&pageType=gallery&pageName='.$navObjects[$i]['title'];
  }
  else if ($navObjects[$i]['type'] == 'home') {
    $navLink = 'index.php';
  }
  else  if ($navObjects[$i]['type'] == 'webpage'){
    $navLink = 'page.php?page='.$navObjects[$i]["title"].'&pageType=webpage&pageName='.$navObjects[$i]['title'];
  }
  else if ($navObjects[$i]['type'] == 'events') {
    $navLink = 'page.php?page=events&pageType=events&pageName='.$navObjects[$i]['title'];
  }
  else if ($navObjects[$i]['type'] == 'newsletter') {
    $navLink = 'page.php?page=newsletter&pageType=newsletter&pageName='.$navObjects[$i]['title'];
  }
  else if ($navObjects[$i]['type'] == 'posts') {
    $navLink = 'page.php?page=posts&pageType=posts&pageName='.$navObjects[$i]['title'];
  }
  else if ($navObjects[$i]['type'] == 'contact') {
    $navLink = 'page.php?page=contact&pageType=contact&pageName='.$navObjects[$i]['title'];
  }
  else if ($navObjects[$i]['type'] == 'cart') {
    $navLink = 'page.php?page=cart&pageType=store&pageName='.$navObjects[$i]['title'];
  }
  else if ($navObjects[$i]['type'] == 'giftCertificates') {
    $navLink = 'page.php?page=gift%20certificates&pageType=gift&pageName='.$navObjects[$i]['title'];
  }
  else if ($navObjects[$i]['type'] == 'coupons') {
    $navLink = 'page.php?page=coupons&pageType=coupons&pageName='.$navObjects[$i]['title'];
  }
  else if ($navObjects[$i]['type'] == 'reviews') {
    $navLink = 'page.php?page=reviews&pageType=reviews&pageName='.$navObjects[$i]['title'];
  }
  else if ($navObjects[$i]['type'] == 'blog') {
    $navLink = 'page.php?page=blog&pageType=blog&pageName='.$navObjects[$i]['title'];
  }
  else {
    $navLink = '';
  }
	$navOutput .=
 '  <li>
      <a href="'.$navLink.$navObjects[$i]["parameters"].'" target="'.$navObjects[$i]["target"].'">
      	'.$navObjects[$i]["title"].'
      </a>
    </li>'.chr(10);
}
$navOutput .= '</ul>';

$fp = fopen('../inc/_navList.php', 'w');
fwrite($fp, $navOutput);
fclose($fp);
