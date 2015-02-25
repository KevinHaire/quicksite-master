<?php 
include $sitePath.'/config/_array.php';
include $masterPath.'/config/_vars.php';
?>
<html>
<head>

<?php
$page = "Home"; 
include $masterPath.'/views/common/_head.php';
?>
</head>

<body ng-app="quicksite">

	<?php include $masterPath.'/views/common/_header.php' ?>

	<section class="mainContent">
		<section class="about">
			<?php
				if ($enableSlider == "true") {
					include $masterPath.'/views/_banner.php';
				}
				echo '<a class="sc-widget-content sc-forceAutoStyle-1 sc-business-'.$bizId.' sc-page-100" href="##">Website Homepage</a>';
			?>
		</section>
		<section class="newsfeed">
			<a class="sc-widget-posts sc-business-<?php echo $bizId; ?>" href="##">Posts</a>
		</section>
	</section>

	<section class="mainContentMobile">
		<div class="slider-wrapper theme-default">
		  <div id="slider2" class="nivoSlider">
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
			<section class="bizInfo ng-cloak" ng-controller="homepageContent">
				<p>Phone: <a href="tel:{{bizInfo.contact.phoneLocal}}">{{bizInfo.contact.phoneLocal}}</a></p>
				<p>{{bizInfo.address.address1}}</p>
				<p>{{bizInfo.address.city}}, {{bizInfo.address.province}}</p>
			</section>
		</div>

		<section class="homepageContent" ng-controller="homepageContent" ng-bind-html="wPageContent.webpage.content"></section>
	</section>
	<?php include $masterPath.'/views/common/_footer.php' ?>
	
</body>

</html>