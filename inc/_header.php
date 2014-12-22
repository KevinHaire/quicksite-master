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