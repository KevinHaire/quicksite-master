	<header class="mainHeader">

		<section class="headerTop">
			<div class="contain">
				<div class="callButton" ng-controller="homepageContent">
					<a href="tel://{{bizInfo.contact.phoneLocal}}">
						<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
						<path d="M492.438,397.75l-2.375-7.156c-5.625-16.719-24.063-34.156-41-38.75l-62.688-17.125c-17-4.625-41.25,1.594-53.688,14.031
							L310,371.438c-82.453-22.281-147.109-86.938-169.359-169.375l22.688-22.688c12.438-12.438,18.656-36.656,14.031-53.656L160.266,63
							c-4.625-16.969-22.094-35.406-38.781-40.969l-7.156-2.406c-16.719-5.563-40.563,0.063-53,12.5L27.391,66.094
							c-6.063,6.031-9.938,23.281-9.938,23.344C16.266,197.188,58.516,301,134.734,377.219c76.031,76.031,179.453,118.219,286.891,117.313
							c0.563,0,18.313-3.813,24.375-9.844l33.938-33.938C492.375,438.313,498,414.469,492.438,397.75z"/>
						</svg>
					</a>
				</div>
				<div class="burgWrapper" href="##">
				  <div class="burg"></div>
				</div>
				<div class="headerLeft">
					<?php 
						if ($logoUrl) {
							echo '<a href="index.php"><img src="uploads/'.$logoUrl.'" alt="Logo"></a>';
						}
						else {
							echo 'Please put a path to your logo in the _variables.php file';
						}
					?>
				</div>

				<div class="headerRight">
					<span><?php echo $bizPhone; ?></span>
					<a href="page.php?page=cart&pageType=cart" class="cartIcon">
						<svg style="width:24px; height:24px; margin-left:8px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="64" viewBox="0 0 64 64">
							<path d="M24 58c0 3.314-2.686 6-6 6s-6-2.686-6-6c0-3.314 2.686-6 6-6s6 2.686 6 6z" fill="#000000"></path>
							<path d="M64 58c0 3.314-2.686 6-6 6s-6-2.686-6-6c0-3.314 2.686-6 6-6s6 2.686 6 6z" fill="#000000"></path>
							<path d="M64 32v-24h-48c0-2.209-1.791-4-4-4h-12v4h8l3.005 25.753c-1.831 1.466-3.005 3.719-3.005 6.247 0 4.419 3.582 8 8 8h48v-4h-48c-2.209 0-4-1.791-4-4 0-0.014 0.001-0.027 0.001-0.041l51.999-7.959z" fill="#000000"></path>
						</svg>
					</a>
					<?php
						if ($facebookLink) {
							echo '<a href="'.$facebookLink.'" target="_blank"><img src="http://www.shopcitywebsites.com/assets/images/iconFb.png" alt=""></a>';
						}
						if ($twitterLink) {
							echo '<a href="'.$twitterLink.'" target="_blank"><img src="http://www.shopcitywebsites.com/assets/images/iconTw.png" alt=""></a>';
						}
						if ($instagramLink) {
							echo '<a href="'.$instagramLink.'" target="_blank"><img src="http://www.shopcitywebsites.com/assets/images/iconIg.png" alt=""></a>';
						}
						if ($pinterestLink) {
							echo '<a href="'.$pinterestLink.'" target="_blank"><img src="http://www.shopcitywebsites.com/assets/images/iconPt.png" alt=""></a>';
						}
						if ($googleLink) {
							echo '<a href="'.$googleLink.'" target="_blank"><img src="http://www.shopcitywebsites.com/assets/images/iconGp.png" alt=""></a>';
						}
						if ($youtubeLink) {
							echo '<a href="'.$youtubeLink.'" target="_blank"><img src="http://www.shopcitywebsites.com/assets/images/iconYt.png" alt=""></a>';	
						}
						if ($shopLink) {
							echo '<a href="'.$shopLink.'" target="_blank"><img src="http://www.shopcitywebsites.com/assets/images/iconSc.png" alt=""></a>';
						}
					?>
					<div class="newsletterContainer">
						<a class="sc-widget-newsletter sc-business-<?php echo $bizId; ?>" href="##">Newsletter</a>
					</div>
				</div>
			</div>
		</section>

		<nav class="mainNav">
			<div class="contain">
				<?php include $sitePath.'/inc/_navList.php'; ?>
			</div>
		</nav>

	</header>