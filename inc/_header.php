	<header class="mainHeader">

		<section class="headerTop">
			<div class="contain">
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