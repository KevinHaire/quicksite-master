		<section>
			<div class="contain">
				<?php
					if (!$formValues["password"]) {
						echo '<br><label for="password"><b>Please set a password:</b></label>
								  <input type="password" name="password" id="password" required />';
					}
					else {
						echo '<h2>Password</h2><input type="password" name="password" id="password" value="'.$formValues["password"].'" />';
					}
				?>
				<h2>Business Setup</h2>
				<div class="left">
					<label for="bizName">Business Name</label>
				  <input type="input" value="<?php echo $formValues["bizName"]; ?>" name="bizName" id="bizName" />
				  <label for="bizCity">City</label>
				  <input type="input" value="<?php echo $formValues["bizCity"]; ?>" name="bizCity" id="bizCity" />
				  <label for="shopDomain">Shop Domain (shopmidland.com)</label>
				  <input type="input" value="<?php echo $formValues["shopDomain"]; ?>" name="shopDomain" id="shopDomain" />
				  <label for="logoUrl">Logo URL</label>
				  <input type="file" name="logoUrl" id="logoUrl" />
				  <input type="hidden" name="existingLogoUrl" value="<?php echo $formValues["logoUrl"]; ?>" />
				</div>
				<div class="right">
					<label for="bizPhone">Phone Number</label>
				  <input type="input" value="<?php echo $formValues["bizPhone"]; ?>" name="bizPhone" id="bizPhone" />
				  <label for="bizProvince">Province</label>
				  <input type="input" value="<?php echo $formValues["bizProvince"]; ?>" name="bizProvince" id="bizProvince" />
				  <label for="bizId">Business ID</label>
				  <input type="input" value="<?php echo $formValues["bizId"]; ?>" name="bizId" id="bizId" />
				  <label for="metaDesc">Business Keywords</label>
				  <input type="textarea" value="<?php echo $formValues["metaDesc"]; ?>" name="metaDesc" id="metaDesc" />
				</div>
				<div style="clear:both;"></div>
				<div class="mobileRedirect">
					<label for="mobileRedirect">Mobile Redirect</label>
					<input name="mobileRedirect" type="checkbox" <?php if ($redirect == "true") {echo "checked";} ?>>
				</div>
			</div>
		</section>