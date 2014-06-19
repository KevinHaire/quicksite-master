<?php

$navOutput = '<ul>'.chr(10);
for ($i=0; $i < sizeof($navObjects); $i++) {
  if ($navObjects[$i]['type'] == 'photos') {
    $navLink = 'page=photos&pageType=gallery';
  }
  else  if ($navObjects[$i]['type'] == 'webpage'){
    $navLink = 'page='.$navObjects[$i]["title"].'&pageType=webpage';
  }
  else if ($navObjects[$i]['type'] == 'events') {
    $navLink = 'page=events&pageType=events';
  }
  else if ($navObjects[$i]['type'] == 'newsletter') {
    $navLink = 'page=newsletter&pageType=newsletter';
  }
  else if ($navObjects[$i]['type'] == 'posts') {
    $navLink = 'page=posts&pageType=posts';
  }
  else if ($navObjects[$i]['type'] == 'contact') {
    $navLink = 'page=contact&pageType=contact';
  }
  else if ($navObjects[$i]['type'] == 'cart') {
    $navLink = 'page=cart&pageType=store';
  }
  else if ($navObjects[$i]['type'] == 'giftCertificates') {
    $navLink = 'page=gift%20certificates&pageType=gift';
  }
  else if ($navObjects[$i]['type'] == 'coupons') {
    $navLink = 'page=coupons&pageType=coupons';
  }
  else if ($navObjects[$i]['type'] == 'reviews') {
    $navLink = 'page=reviews&pageType=reviews';
  }
  else if ($navObjects[$i]['type'] == 'blog') {
    $navLink = 'page=blog&pageType=blog';
  }
	$navOutput .=
 '  <li>
      <a href="page.php?'.$navLink.$navObjects[$i]["parameters"].'" target="'.$navObjects[$i]["target"].'">
      	'.$navObjects[$i]["title"].'
      </a>
    </li>'.chr(10);
}
$navOutput .= '</ul>';
	
$fp = fopen('../inc/_navList.php', 'w');
fwrite($fp, $navOutput);
fclose($fp);