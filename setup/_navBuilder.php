<?php

$navOutput = '<ul>'.chr(10);
for ($i=0; $i < sizeof($navObjects); $i++) {
  if ($navObjects[$i]['type'] == 'photos') {
    $navLink = 'page.php?page=photos&pageType=gallery';
  }
  else if ($navObjects[$i]['type'] == 'home') {
    $navLink = 'index.php';
  }
  else  if ($navObjects[$i]['type'] == 'webpage'){
    $navLink = 'page.php?page='.$navObjects[$i]["title"].'&pageType=webpage';
  }
  else if ($navObjects[$i]['type'] == 'events') {
    $navLink = 'page.php?page=events&pageType=events';
  }
  else if ($navObjects[$i]['type'] == 'newsletter') {
    $navLink = 'page.php?page=newsletter&pageType=newsletter';
  }
  else if ($navObjects[$i]['type'] == 'posts') {
    $navLink = 'page.php?page=posts&pageType=posts';
  }
  else if ($navObjects[$i]['type'] == 'contact') {
    $navLink = 'page.php?page=contact&pageType=contact';
  }
  else if ($navObjects[$i]['type'] == 'cart') {
    $navLink = 'page.php?page=cart&pageType=store';
  }
  else if ($navObjects[$i]['type'] == 'giftCertificates') {
    $navLink = 'page.php?page=gift%20certificates&pageType=gift';
  }
  else if ($navObjects[$i]['type'] == 'coupons') {
    $navLink = 'page.php?page=coupons&pageType=coupons';
  }
  else if ($navObjects[$i]['type'] == 'reviews') {
    $navLink = 'page.php?page=reviews&pageType=reviews';
  }
  else if ($navObjects[$i]['type'] == 'blog') {
    $navLink = 'page.php?page=blog&pageType=blog';
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