<?php
  header("Content-type: text/css; charset: UTF-8");
?>

html {
  background: <?php echo $bgColor ?>;
}

h1 {
  color: <?php echo $h1Color ?>;
  font-size: <?php echo $h1TextSize ?>;
}

a {
  color: <?php echo $linkColor; ?>;
}

body {
  color: <?php echo $mainTextColor; ?>;
  font-size: <?php echo $mainTextSize; ?>;
  font-family: <?php echo $mainFont; ?>;
}

.headerTop {
  background: <?php echo $headerBgColor; ?>;
}

.headerRight span {
  color: <?php echo $phoneColor; ?>;
  font-family: <?php echo $phoneFont; ?>;
}

.mainNav {
  background: -webkit-gradient(linear, 50% 100%, 50% 0%, color-stop(100%, <?php echo $navColor; ?>), color-stop(100%, <?php echo $lightNavColor; ?>));
  background: -webkit-linear-gradient(bottom, <?php echo $navColor; ?> 25px, <?php echo $lightNavColor; ?> 25px);
  background: -moz-linear-gradient(bottom, <?php echo $navColor; ?> 25px, <?php echo $lightNavColor; ?> 25px);
  background: -o-linear-gradient(bottom, <?php echo $navColor; ?> 25px, <?php echo $lightNavColor; ?> 25px);
  background: linear-gradient(to bottom, <?php echo $navColor; ?> 25px, <?php echo $lightNavColor; ?> 25px);
  height: 50px;
}

.mainNav ul li {
  height: 50px;
  display: inline-block;
  border-right: 1px solid <?php echo $navColor; ?>;
  border-left: 1px solid <?php echo $lightNavColor; ?>;
}

.mainNav ul li:hover {
  background: -webkit-gradient(linear, 50% 100%, 50% 0%, color-stop(100%, <?php echo $darkerNavColor; ?>), color-stop(100%, <?php echo $darkNavColor; ?>));
  background: -webkit-linear-gradient(bottom, <?php echo $darkerNavColor; ?> 25px, <?php echo $darkNavColor; ?> 25px);
  background: -moz-linear-gradient(bottom, <?php echo $darkerNavColor; ?> 25px, <?php echo $darkNavColor; ?> 25px);
  background: -o-linear-gradient(bottom, <?php echo $darkerNavColor; ?> 25px, <?php echo $darkNavColor; ?> 25px);
  background: linear-gradient(to bottom, <?php echo $darkerNavColor; ?> 25px, <?php echo $darkNavColor; ?> 25px);
}


.on {
  background: -webkit-gradient(linear, 50% 100%, 50% 0%, color-stop(100%, <?php echo $darkerNavColor; ?>), color-stop(100%, <?php echo $darkNavColor; ?>));
  background: -webkit-linear-gradient(bottom, <?php echo $darkerNavColor; ?> 25px, <?php echo $darkNavColor; ?> 25px);
  background: -moz-linear-gradient(bottom, <?php echo $darkerNavColor; ?> 25px, <?php echo $darkNavColor; ?> 25px);
  background: -o-linear-gradient(bottom, <?php echo $darkerNavColor; ?> 25px, <?php echo $darkNavColor; ?> 25px);
  background: linear-gradient(to bottom, <?php echo $darkerNavColor; ?> 25px, <?php echo $darkNavColor; ?> 25px); 
}

.mainNav ul li a {
  color: <?php echo $navLinkColor; ?>;
  font-family: <?php echo $navFont; ?>;
}

.about {
  background: <?php echo $aboutBgColor; ?>;
  color: <?php echo $aboutTextColor; ?>;
  font-size: <?php echo $aboutTextSize; ?>;
  font-family: <?php echo $aboutFont; ?>;
}

.newsfeed {
  background: <?php echo $newsfeedBgColor; ?>;
  color: <?php echo $newsfeedTextColor; ?>;
  font-size: <?php echo $newsfeedTextSize; ?>;
  font-family: <?php echo $newsfeedFont; ?>;
}

.newsfeed h1 {
  color: <?php echo $newsfeedDateColor ?>;
  font-family: <?php echo $newsfeedFont; ?>;
}

.mainFooter {
  background: <?php echo $footerBgColor; ?>;
}

.mainFooter ul li {
  display: inline;
  padding: 0 10px;
  border-right: 1px solid <?php echo $footerNavColor; ?>;
}

.mainFooter ul li a {
  color: <?php echo $footerNavColor; ?>;
  font-family: <?php echo $footerNavFont; ?>;
}

.copyright, .poweredBy span {
  color: <?php echo $footerCopyrightColor; ?>;
}

.cartColor {
  border:1px solid <?php echo $cartAccent; ?>;
}

svg path,
svg rect{
  fill: <?php echo $phoneColor; ?>;
}

.itemInfo {
  border-top: 1px solid <?php echo $cartAccent; ?>;
}

.cartSideBar ul li a {
  color: <?php echo $mainTextColor; ?>; 
}

.itemInfo h3, .itemInfo span {
  color: <?php echo $mainTextColor; ?>; 
}

.price, .productDescription h2, .priceOnSale {
  color: <?php echo $h1Color; ?>; 
}

.price span {
  color: <?php echo $mainTextColor; ?>;
}

.thumbWrapper {
  border-top:1px solid <?php echo $cartAccent; ?>;
}

.inquire button, .addToCart, .cartTotals button, .checkoutButton {
  background: <?php echo $h1Color; ?>;
  color: <?php echo $footerNavColor; ?>;
}

.inquireForm {
  background: <?php echo $h1Color; ?>;
}

.sendInquiry {
  background: <?php echo $bgColor; ?> !important;
  color: <?php echo $h1Color; ?> !important;
}