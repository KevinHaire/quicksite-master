		<section class="slider">
			<div class="contain">
				<h2>Slider / Banner</h2>
				<div class="enableSlider">
					<lable for="enableSlider">Show Slider</lable>
					<input type="checkbox" name="enableSlider" class="enableSliderCb" <?php if ($enableSlider == "true") {echo "checked";} ?>/>
				</div>
				<div class="left">
					<div class="bannerInputContainer">
						<label for="bannerImgLink1">Banner #1 Image</label>
						<input type="checkbox" name="enableBanner1" class="enableBanner" <?php if ($enableBanner1 == "true") {echo "checked";} ?>/>
					  <input type="file" name="bannerImgLink1" class="bannerImgLink" />
					  <div style="clear:both;"></div>
					  <input type="hidden" name="existingBannerImgLink1" value="<?php echo $formValues["bannerImgLink1"]; ?>" />
					</div>
					<div class="bannerInputContainer">
						<label for="bannerImgLink3">Banner #3 Image</label>
						<input type="checkbox" name="enableBanner3" class="enableBanner" <?php if ($enableBanner3 == "true") {echo "checked";} ?>/>
					  <input type="file" name="bannerImgLink3" class="bannerImgLink" />
					  <div style="clear:both;"></div>
					  <input type="hidden" name="existingBannerImgLink3" value="<?php echo $formValues["bannerImgLink3"]; ?>" />
					</div>
				</div>
				<div class="right">
					<div class="bannerInputContainer">
						<label for="bannerImgLink2">Banner #2 Image</label>
						<input type="checkbox" name="enableBanner2" class="enableBanner" <?php if ($enableBanner2 == "true") {echo "checked";} ?>/>
					  <input type="file" name="bannerImgLink2" class="bannerImgLink" />
					  <div style="clear:both;"></div>
					  <input type="hidden" name="existingBannerImgLink2" value="<?php echo $formValues["bannerImgLink2"]; ?>" />
					</div>
					<div class="bannerInputContainer">
						<label for="bannerImgLink4">Banner #4 Image</label>
						<input type="checkbox" name="enableBanner4" class="enableBanner" <?php if ($enableBanner4 == "true") {echo "checked";} ?>/>
					  <input type="file" name="bannerImgLink4" class="bannerImgLink" />
					  <div style="clear:both;"></div>
					  <input type="hidden" name="existingBannerImgLink4" value="<?php echo $formValues["bannerImgLink4"]; ?>" />
					</div>
				</div>
			</div>
		</section>