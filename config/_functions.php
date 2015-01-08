<?php

	function colorBrightness($hex, $percent) {
		// Work out if hash given
		$hash = '';
		if (stristr($hex,'#')) {
			$hex = str_replace('#','',$hex);
			$hash = '#';
		}
		/// HEX TO RGB
		$rgb = array(hexdec(substr($hex,0,2)), hexdec(substr($hex,2,2)), hexdec(substr($hex,4,2)));
		//// CALCULATE 
		for ($i=0; $i<3; $i++) {
			// See if brighter or darker
			if ($percent > 0) {
				// Lighter
				$rgb[$i] = round($rgb[$i] * $percent) + round(255 * (1-$percent));
			} else {
				// Darker
				$positivePercent = $percent - ($percent*2);
				$rgb[$i] = round($rgb[$i] * $positivePercent) + round(0 * (1-$positivePercent));
			}
			// In case rounding up causes us to go to 256
			if ($rgb[$i] > 255) {
				$rgb[$i] = 255;
			}
		}
		//// RBG to Hex
		$hex = '';
		for($i=0; $i < 3; $i++) {
			// Convert the decimal digit to hex
			$hexDigit = dechex($rgb[$i]);
			// Add a leading zero if necessary
			if(strlen($hexDigit) == 1) {
			$hexDigit = "0" . $hexDigit;
			}
			// Append to the hex string
			$hex .= $hexDigit;
		}
		return $hash.$hex;
	}
	
  // CHEKS IF YOU'RE ON THE HOMEPAGE. IF NOT, DECODES THE PAGE VARIABLE SO ITS USABLE IN PAGE TITLE
  $page = isset($_GET["page"]) ? $_GET["page"] : "Home";

  $pageType =    isset($_GET['pageType']) ? $_GET['pageType'] : "";
  $wPageId =     isset($_GET['wPageId']) ? $_GET['wPageId'] : "";
  $showCat =     isset($_GET['showCat']) ? $_GET['showCat'] : "";
  $singleCat =   isset($_GET['singleCat']) ? $_GET['singleCat'] : "";
  $galleryId =   isset($_GET['galleryId']) ? $_GET['galleryId'] : "";


  $color = $navColor;
  $brightness = 0.9;
  $lightNavColor = colorBrightness($color,$brightness); 

  $newColor = $lightNavColor;
  $newBrightness = -0.9;
  $darkNavColor = colorBrightness($newColor,$newBrightness); 

  $newerColor = $darkNavColor;
  $newerBrightness = -0.9;
  $darkerNavColor = colorBrightness($newerColor,$newerBrightness);
		
?>