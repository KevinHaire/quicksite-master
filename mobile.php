<?php 
include $sitePath.'/config/_array.php';
include $masterPath.'/config/_vars.php';
?>
<!DOCTYPE HTML>
<html>
<head>

<?php
$page = "Home"; 
include $masterPath.'/inc/_mobileHead.php';
?>

</head>

<body ng-app="quicksiteMobile">
	
	<input class="bizId" type="hidden" value="<?php echo $bizId ?>">
	
	<header class="mainHeader headerTop">
		<?php echo '<a class="phoneNumber" href="tel:'.$bizPhone.'">CALL</a>'; ?>
		<?php echo '<a href="mobile.php"><img src="uploads/'.$logoUrl.'" alt="Logo"></a>'; ?>
	</header>
	
	<div class="headerTop slider-wrapper theme-default">
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

	<div class="contain">
		<section class="bizInfo" ng-controller="homepageContent">
			<p>Phone: <a href="tel:{{bizInfo.contact.phoneLocal}}">{{bizInfo.contact.phoneLocal}}</a></p>
			<p>{{bizInfo.address.address1}}</p>
			<p>{{bizInfo.address.city}}, {{bizInfo.address.province}}</p>
		</section>
	</div>

	<section class="homepageContent about" ng-controller="homepageContent" ng-bind-html="wPageContent.webpage.content"></section>

	
	<footer class="mainFooter">
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
			if ($shopLink) {
				echo '<a href="'.$shopLink.'" target="_blank"><img src="http://www.shopcitywebsites.com/assets/images/iconSc.png" alt=""></a>';
			}
		?>
		<div class="poweredBy">
			<p>Powered By</p>
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
			?>
		</div>
	</footer>	

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="http://www.shopcitywebsites.com/assets/js/mobile/angular.min.js"></script>
	<script src="http://www.shopcitywebsites.com/assets/js/mobile/angular-route.min.js"></script>
	<script src="http://www.shopcitywebsites.com/assets/js/mobile/angular-sanitize.min.js"></script>
	<?php
		if ($enableSlider == "true") {
			echo '<script type="text/javascript" src="http://www.shopcitywebsites.com/assets/js/jquery.nivo.slider.js"></script>'.chr(13).chr(10).
					 '<script>$("#slider").nivoSlider();</script>'.chr(13).chr(10);
		}
	?>
	<script>
		'use strict';

		/**
		 * @ngdoc overview
		 * @name quicksiteMobile
		 * @description
		 * # quicksiteMobile
		 *
		 * Main module of the application.
		 */
		var quicksiteMobile = angular.module('quicksiteMobile', [
		  'ngSanitize',
		  'ngRoute', 
		  'quicksiteMobileControllers'
		  ]
		);


		var quicksiteMobile = angular.module('quicksiteMobileControllers',[]);

		  quicksiteMobile.controller('homepageContent',['$scope', '$http', function ($scope, $http) {
		  	var bizId = $('.bizId').val();
	      $http.get('http://shopcity.com/webApps/api/webpage/?listingid='+bizId+'&pageid=100')
			    .then(function (response) {
			      $scope.wPageContent = response.data;
			    }
			  );
			  $http.get('http://www.shopmidland.com/webApps/api/listing/?listingId='+bizId)
			    .then(function (response) {
			      $scope.bizInfo = response.data;
			    }
			  );
		  }]);
	</script>
</body>
</html>