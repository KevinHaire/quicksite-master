<div class="slider-wrapper theme-default">
  <div id="slider" class="nivoSlider">
		<?php

			if ($enableBanner1 == "true" && file_exists('uploads/'.$bannerImgLink1.'')) {
				echo '<img src="uploads/'.$bannerImgLink1.'" />';
			}

			if ($enableBanner2 == "true" && file_exists('uploads/'.$bannerImgLink2.'')) {
				echo '<img src="uploads/'.$bannerImgLink2.'" />';
			}

			if ($enableBanner3 == "true" && file_exists('uploads/'.$bannerImgLink3.'')) {
				echo '<img src="uploads/'.$bannerImgLink3.'" />';
			}

			if ($enableBanner4 == "true" && file_exists('uploads/'.$bannerImgLink4.'')) {
				echo '<img src="uploads/'.$bannerImgLink4.'" />';
			}
		?>
	</div>
</div>
