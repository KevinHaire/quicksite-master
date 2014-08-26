<?php
include $sitePath.'/config/_array.php';
include $masterPath.'/config/_vars.php';
include $masterPath.'/inc/_redirect.php';
?>
<!DOCTYPE HTML>
<html>
<head>

<?php
$page = "Home";
include $masterPath.'/inc/_head.php';
?>
</head>

<body>

	<?php include $masterPath.'/inc/_header.php' ?>

	<section class="mainContent">
		<section class="about">
			<?php
				if ($enableSlider == "true") {
					include $masterPath.'/inc/_banner.php';
				}
			?>
			<?php
				$siteHomepage = file_get_contents('http://www.shopcity.com/webtools/content2/?page=100&listingid='.$bizId);
				$siteHomepageStripped = trim(strip_tags($siteHomepage));
				if ($siteHomepageStripped == '') {
					echo ("<p>To put content here, login to your profile and create a custom webpage with the title 'Website Homepage'.</p>");
				} else {
					echo '<a class="sc-widget-content sc-forceAutoStyle-1 sc-business-'.$bizId.' sc-page-100" href="##">Website Homepage</a>';
				}
			?>
		</section>
		<section class="newsfeed">
			<a class="sc-widget-posts sc-business-<?php echo $bizId; ?>" href="##">Posts</a>
		</section>
	</section>

	<?php include $masterPath.'/inc/_footer.php' ?>

</body>

</html>
