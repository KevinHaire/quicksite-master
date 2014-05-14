		<section>
			<div class="contain">
				<h2>Styling and Colors</h2>
				<h3>Global Styles</h3>
				<div class="left">
					<label for="bgColor">Background Color</label>
				  <input type="text" class="color" value="<?php echo $formValues["bgColor"]; ?>" name="bgColor" id="bgColor" />
					<label for="linkColor">Link Color</label>
				  <input type="text" class="color" value="<?php echo $formValues["linkColor"]; ?>" name="linkColor" id="linkColor" />
					<label for="mainTextSize">Main Text Size</label>
				  <select type="select" name="mainTextSize" id="mainTextSize" />
				  	<?php $selectedSize = $formValues["mainTextSize"]; ?>
				  	<option value="10px" <?php if ($selectedSize == "10px") {echo "selected";} ?>>10px</option>
				  	<option value="12px" <?php if ($selectedSize == "12px") {echo "selected";} ?>>12px</option>
				  	<option value="14px" <?php if ($selectedSize == "14px") {echo "selected";} ?>>14px</option>
				  	<option value="16px" <?php if ($selectedSize == "16px") {echo "selected";} ?>>16px</option>
				  	<option value="18px" <?php if ($selectedSize == "18px") {echo "selected";} ?>>18px</option>
				  	<option value="20px" <?php if ($selectedSize == "20px") {echo "selected";} ?>>20px</option>
					</select>
				  <label for="h1TextSize">Headings Text Size</label>
				  <select type="select" name="h1TextSize" id="h1TextSize" />
				  	<?php $selectedSize = $formValues["h1TextSize"]; ?>
				  	<option value="14px" <?php if ($selectedSize == "14px") {echo "selected";} ?>>14px</option>
				  	<option value="16px" <?php if ($selectedSize == "16px") {echo "selected";} ?>>16px</option>
				  	<option value="18px" <?php if ($selectedSize == "18px") {echo "selected";} ?>>18px</option>
				  	<option value="20px" <?php if ($selectedSize == "20px") {echo "selected";} ?>>20px</option>
				  	<option value="22px" <?php if ($selectedSize == "22px") {echo "selected";} ?>>22px</option>
				  	<option value="24px" <?php if ($selectedSize == "24px") {echo "selected";} ?>>24px</option>
					</select>
				</div>
				<div class="right">
					<label for="mainTextColor">Main Text Color</label>
				  <input type="text" class="color" value="<?php echo $formValues["mainTextColor"]; ?>" name="mainTextColor" id="mainTextColor" />
				  <label for="mainFont">Main Font</label>
				  <select type="select" name="mainFont" id="mainFont" />
						<?php $selectedFont = $formValues["mainFont"]; ?>
						<option value="Arial" <?php if ($selectedFont == "Arial") {echo "selected";} ?>>Arial</option>
						<option value="Helvetica" <?php if ($selectedFont == "Helvetica") {echo "selected";} ?>>Helvetica</option>
						<option value="Impact" <?php if ($selectedFont == "Impact") {echo "selected";} ?>>Impact</option>
						<option value="Comic Sans MS" <?php if ($selectedFont == "Comic Sans MS") {echo "selected";} ?>>Comic Sans MS</option>
						<option value="Courier New" <?php if ($selectedFont == "Courier New") {echo "selected";} ?>>Courier New</option>
						<option value="Georgia" <?php if ($selectedFont == "Georgia") {echo "selected";} ?>>Georgia</option>
						<option value="Verdana" <?php if ($selectedFont == "Verdana") {echo "selected";} ?>>Verdana</option>
						<option value="Times New Roman" <?php if ($selectedFont == "Times New Roman") {echo "selected";} ?>>Times New Roman</option>
				  </select>
				  <label for="h1Color">H1 Color</label>
				  <input type="text" class="color" value="<?php echo $formValues["h1Color"]; ?>" name="h1Color" id="h1Color" />
				</div>
				<div style="clear:both"></div>
				<h3>Header Styles</h3>
				<div class="left">
					<label for="headerBgColor">Header Background Color</label>
				  <input type="text" class="color" value="<?php echo $formValues["headerBgColor"]; ?>" name="headerBgColor" id="headerBgColor" />
					<label for="navLinkColor">Navigation Link Color</label>
				  <input type="text" class="color" value="<?php echo $formValues["navLinkColor"]; ?>" name="navLinkColor" id="navLinkColor" />
					<label for="phoneColor">Phone Number Color</label>
				  <input type="text" class="color" value="<?php echo $formValues["phoneColor"]; ?>" name="phoneColor" id="phoneColor" />
				</div>
				<div class="right">
					<label for="navColor">Navigation Color</label>
				  <input type="text" class="color" value="<?php echo $formValues["navColor"]; ?>" name="navColor" id="navColor" />
					<label for="navFont">Navigation Font</label>
				  <select type="select" name="navFont" id="navFont" />
						<?php $selectedFont = $formValues["navFont"]; ?>
						<option value="Arial" <?php if ($selectedFont == "Arial") {echo "selected";} ?>>Arial</option>
						<option value="Helvetica" <?php if ($selectedFont == "Helvetica") {echo "selected";} ?>>Helvetica</option>
						<option value="Impact" <?php if ($selectedFont == "Impact") {echo "selected";} ?>>Impact</option>
						<option value="Comic Sans MS" <?php if ($selectedFont == "Comic Sans MS") {echo "selected";} ?>>Comic Sans MS</option>
						<option value="Courier New" <?php if ($selectedFont == "Courier New") {echo "selected";} ?>>Courier New</option>
						<option value="Georgia" <?php if ($selectedFont == "Georgia") {echo "selected";} ?>>Georgia</option>
						<option value="Verdana" <?php if ($selectedFont == "Verdana") {echo "selected";} ?>>Verdana</option>
						<option value="Times New Roman" <?php if ($selectedFont == "Times New Roman") {echo "selected";} ?>>Times New Roman</option>
				  </select>
				  <label for="phoneFont">Phone Number Font</label>
				  <select type="select" name="phoneFont" id="phoneFont" />
						<?php $selectedFont = $formValues["phoneFont"]; ?>
						<option value="Arial" <?php if ($selectedFont == "Arial") {echo "selected";} ?>>Arial</option>
						<option value="Helvetica" <?php if ($selectedFont == "Helvetica") {echo "selected";} ?>>Helvetica</option>
						<option value="Impact" <?php if ($selectedFont == "Impact") {echo "selected";} ?>>Impact</option>
						<option value="Comic Sans MS" <?php if ($selectedFont == "Comic Sans MS") {echo "selected";} ?>>Comic Sans MS</option>
						<option value="Courier New" <?php if ($selectedFont == "Courier New") {echo "selected";} ?>>Courier New</option>
						<option value="Georgia" <?php if ($selectedFont == "Georgia") {echo "selected";} ?>>Georgia</option>
						<option value="Verdana" <?php if ($selectedFont == "Verdana") {echo "selected";} ?>>Verdana</option>
						<option value="Times New Roman" <?php if ($selectedFont == "Times New Roman") {echo "selected";} ?>>Times New Roman</option>
				  </select>
				</div>
				<div style="clear:both"></div>
				<h3>Content Area Styling and Color</h3>
				<h4>Homepage</h4>
				<div class="left">
					<label for="aboutTextColor">About Text Color</label>
				  <input type="text" class="color" value="<?php echo $formValues["aboutTextColor"]; ?>" name="aboutTextColor" id="aboutTextColor" />
					<label for="aboutFont">About Font</label>
				  <select type="select" name="aboutFont" id="aboutFont" />
						<?php $selectedFont = $formValues["aboutFont"]; ?>
						<option value="Arial" <?php if ($selectedFont == "Arial") {echo "selected";} ?>>Arial</option>
						<option value="Helvetica" <?php if ($selectedFont == "Helvetica") {echo "selected";} ?>>Helvetica</option>
						<option value="Impact" <?php if ($selectedFont == "Impact") {echo "selected";} ?>>Impact</option>
						<option value="Comic Sans MS" <?php if ($selectedFont == "Comic Sans MS") {echo "selected";} ?>>Comic Sans MS</option>
						<option value="Courier New" <?php if ($selectedFont == "Courier New") {echo "selected";} ?>>Courier New</option>
						<option value="Georgia" <?php if ($selectedFont == "Georgia") {echo "selected";} ?>>Georgia</option>
						<option value="Verdana" <?php if ($selectedFont == "Verdana") {echo "selected";} ?>>Verdana</option>
						<option value="Times New Roman" <?php if ($selectedFont == "Times New Roman") {echo "selected";} ?>>Times New Roman</option>
				  </select>
				</div>
				<div class="right">
					<label for="aboutBgColor">About Background Color</label>
				  <input type="text" class="color" value="<?php echo $formValues["aboutBgColor"]; ?>" name="aboutBgColor" id="aboutBgColor" />
					<label for="aboutTextSize">About Text Size</label>
				  <select type="select" name="aboutTextSize" id="aboutTextSize" />
				  	<?php $selectedSize = $formValues["aboutTextSize"]; ?>
				  	<option value="10px" <?php if ($selectedSize == "10px") {echo "selected";} ?>>10px</option>
				  	<option value="12px" <?php if ($selectedSize == "12px") {echo "selected";} ?>>12px</option>
				  	<option value="14px" <?php if ($selectedSize == "14px") {echo "selected";} ?>>14px</option>
				  	<option value="16px" <?php if ($selectedSize == "16px") {echo "selected";} ?>>16px</option>
				  	<option value="18px" <?php if ($selectedSize == "18px") {echo "selected";} ?>>18px</option>
				  	<option value="20px" <?php if ($selectedSize == "20px") {echo "selected";} ?>>20px</option>
					</select>
				</div>
				<div style="clear:both"></div>
				<h4>Newsfeed</h4>
				<div class="left">
					<label for="newsfeedBgColor">Newsfeed Background Color</label>
				  <input type="text" class="color" value="<?php echo $formValues["newsfeedBgColor"]; ?>" name="newsfeedBgColor" id="newsfeedBgColor" />
					<label for="newsfeedTextSize">Newsfeed Text Size</label>
				  <select type="select" name="newsfeedTextSize" id="newsfeedTextSize" />
				  	<?php $selectedSize = $formValues["newsfeedTextSize"]; ?>
				  	<option value="10px" <?php if ($selectedSize == "10px") {echo "selected";} ?>>10px</option>
				  	<option value="12px" <?php if ($selectedSize == "12px") {echo "selected";} ?>>12px</option>
				  	<option value="14px" <?php if ($selectedSize == "14px") {echo "selected";} ?>>14px</option>
				  	<option value="16px" <?php if ($selectedSize == "16px") {echo "selected";} ?>>16px</option>
				  	<option value="18px" <?php if ($selectedSize == "18px") {echo "selected";} ?>>18px</option>
				  	<option value="20px" <?php if ($selectedSize == "20px") {echo "selected";} ?>>20px</option>
					</select>
					<label for="newsfeedDateColor">Newsfeed Date Color</label>
				  <input type="text" class="color" value="<?php echo $formValues["newsfeedDateColor"]; ?>" name="newsfeedDateColor" id="newsfeedDateColor" />
				</div>
				<div class="right">
					<label for="newsfeedTextColor">Newsfeed Text Color</label>
				  <input type="text" class="color" value="<?php echo $formValues["newsfeedTextColor"]; ?>" name="newsfeedTextColor" id="newsfeedTextColor" />
					<label for="newsfeedFont">Newsfeed Font</label>
				  <select type="select" name="newsfeedFont" id="newsfeedFont" />
						<?php $selectedFont = $formValues["newsfeedFont"]; ?>
						<option value="Arial" <?php if ($selectedFont == "Arial") {echo "selected";} ?>>Arial</option>
						<option value="Helvetica" <?php if ($selectedFont == "Helvetica") {echo "selected";} ?>>Helvetica</option>
						<option value="Impact" <?php if ($selectedFont == "Impact") {echo "selected";} ?>>Impact</option>
						<option value="Comic Sans MS" <?php if ($selectedFont == "Comic Sans MS") {echo "selected";} ?>>Comic Sans MS</option>
						<option value="Courier New" <?php if ($selectedFont == "Courier New") {echo "selected";} ?>>Courier New</option>
						<option value="Georgia" <?php if ($selectedFont == "Georgia") {echo "selected";} ?>>Georgia</option>
						<option value="Verdana" <?php if ($selectedFont == "Verdana") {echo "selected";} ?>>Verdana</option>
						<option value="Times New Roman" <?php if ($selectedFont == "Times New Roman") {echo "selected";} ?>>Times New Roman</option>
				  </select>
				</div>
				<div style="clear:both"></div>
				<h4>Footer</h4>
				<div class="left">
					<label for="footerNavColor">Footer Navigation Color</label>
				  <input type="text" class="color" value="<?php echo $formValues["footerNavColor"]; ?>" name="footerNavColor" id="footerNavColor" />
				  <label for="footerCopyrightColor">Footer Copyright Color</label>
				  <input type="text" class="color" value="<?php echo $formValues["footerCopyrightColor"]; ?>" name="footerCopyrightColor" id="footerCopyrightColor" />
				</div>
				<div class="right">
					<label for="footerNavFont">Footer Navigation Font</label>
				  <select type="select" name="footerNavFont" id="footerNavFont" />
						<?php $selectedFont = $formValues["footerNavFont"]; ?>
						<option value="Arial" <?php if ($selectedFont == "Arial") {echo "selected";} ?>>Arial</option>
						<option value="Helvetica" <?php if ($selectedFont == "Helvetica") {echo "selected";} ?>>Helvetica</option>
						<option value="Impact" <?php if ($selectedFont == "Impact") {echo "selected";} ?>>Impact</option>
						<option value="Comic Sans MS" <?php if ($selectedFont == "Comic Sans MS") {echo "selected";} ?>>Comic Sans MS</option>
						<option value="Courier New" <?php if ($selectedFont == "Courier New") {echo "selected";} ?>>Courier New</option>
						<option value="Georgia" <?php if ($selectedFont == "Georgia") {echo "selected";} ?>>Georgia</option>
						<option value="Verdana" <?php if ($selectedFont == "Verdana") {echo "selected";} ?>>Verdana</option>
						<option value="Times New Roman" <?php if ($selectedFont == "Times New Roman") {echo "selected";} ?>>Times New Roman</option>
				  </select>
					<label for="footerBgColor">Footer Background Color</label>
				  <input type="text" class="color" value="<?php echo $formValues["footerBgColor"]; ?>" name="footerBgColor" id="footerBgColor" />
				</div>
				<div style="clear:both"></div>
			</div>
		</section>