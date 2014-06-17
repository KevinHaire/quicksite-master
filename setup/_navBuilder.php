<?php

$navOutput = '<ul>'.chr(10);
for ($i=0; $i < sizeof($navObjects); $i++) {			
	$navOutput .='  <li><a href="">'.$navObjects[$i]["title"].'</a></li>'.chr(10);
}
$navOutput .= '</ul>';
	
$fp = fopen('../inc/_navList.php', 'w');
fwrite($fp, $navOutput);
fclose($fp);