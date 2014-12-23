<!-- FOOTER CONTENT -->
	<footer class="mainFooter">
		<?php include $sitePath.'/inc/_navList.php'; ?>
		<span class="copyright">
			&copy Copyright <?php echo date ("Y"); ?> - All Rights Reserved
		</span>
		<div class="poweredBy">
			<span>Powered By:</span>
			<?php
				function get_http_response_code($url) {
			    $headers = get_headers($url);
			    return substr($headers[0], 9, 3);
				}
				$footerLogoLocation = 'http://www.'.$shopDomain.'/style/footerlogo/'.$shopDomain.'.png';
				if(get_http_response_code($footerLogoLocation) != "404"){
					echo '<a href="http://'.$shopDomain.'" target="_blank"><img src="'.$footerLogoLocation.'" ></a>';
				}else{
				    echo '<a href="http://www.shopcity.com" target="_blank"><img src="http://www.shopcity.com/style/1001/newlogo_1000.png" ></a>';
				}
				if ($facebookLink){
					echo '<iframe src="http://www.facebook.com/plugins/like.php?href='.$facebookLink.'&amp;layout=button_count&amp;show_faces=false&amp;action=like&amp;font&amp;colorscheme=light&amp;api_key=113050292188" scrolling="no" frameborder="0"  style="border:none; overflow:hidden; width:84px;height:21px;"></iframe>';
				}else{
					$curUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					echo '<iframe src="http://www.facebook.com/plugins/like.php?href='.$curUrl.'&amp;layout=button_count&amp;show_faces=false&amp;action=like&amp;font&amp;colorscheme=light&amp;api_key=113050292188" scrolling="no" frameborder="0"  style="border:none; overflow:hidden; width:84px;height:21px;"></iframe>';
				}

				$fullSiteCookie = isset($_COOKIE["fullSite"]);
				if ($fullSiteCookie) {
					echo '<a class="removeCookie copyright" href="index.php">Mobile Site</a>';
				}
			?>
		</div>
	</footer>
<!-- END OF FOOTER CONTENT -->
<input id="listingId" type="hidden" value="<?php echo $bizId ?>">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://www.<?php echo $shopDomain; ?>/webtools/script/allEnhanced.js.cfm"></script>
<script src="http://www.shopcitywebsites.com/assets/js/mobile/jquery.cookie.js"></script>
<script src="http://www.shopcitywebsites.com/assets/js/script.build.js"></script>
<script src="http://www.shopcitywebsites.com/assets/js/cart.js"></script>

<?php
	if ($enableSlider == "true") {
		echo '<script type="text/javascript" src="http://www.shopcitywebsites.com/assets/js/jquery.nivo.slider.js"></script>'.chr(13).chr(10).
				 '<script>$("#slider").nivoSlider();</script>'.chr(13).chr(10);
	}
?>
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', '<?php echo $analytics; ?>']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
