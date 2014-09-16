<?php 
  
  $metaDesc =           $formValues["metaDesc"]; //FILLS IN META DESCRIPTION IN THE HEAD
  // SET THIS TO TRUE FOR REDIRECT TO MOBILE SHOPCITY PROFILE FROM MOBILE DEVICES
  $redirect = 'true';
  if ($formValues["mobileRedirect"] == "false") {
    $redirect = "false";
  }


  // INFORMATION ABOUT BUSINESS USED TO GENERATE WEBTOOLS, PAGE TITLES AND REDIRECT LINK
  $bizName =            $formValues["bizName"]; //BUSINESS NAME
  $bizPhone =           $formValues["bizPhone"]; //BUSINESS PHONE NUMBER
  $bizCity =            $formValues["bizCity"]; //THE CITY IN THE DOMAIN NAME
  $bizProvince =        $formValues["bizProvince"]; //PROVINCE
  $shopDomain =         $formValues["shopDomain"]; //THE DOMAIN EXTENSION (.COM, .CA)
  $bizId =              $formValues["bizId"]; //BUISNESS ID
  $logoUrl =            $formValues["logoUrl"]; // LOGO URL (CAN BE RELATIVE OR ABSOLUTE PATH)

  $shopLink =           $formValues["shopLink"]; //LINK TO SHOPCITY PAGE
  $facebookLink =       $formValues["facebookLink"]; //FACEBOOK LINK, LEAVE BLANK IF THEY DONT HAVE ONE
  $twitterLink =        $formValues["twitterLink"]; //TWITTER LINK, LEAVE BLANK IF THEY DONT HAVE ONE
  $instagramLink =      $formValues["instagramLink"]; //INSTAGRAM LINK, LEAVE BLANK IF THEY DONT HAVE ONE
  $googleLink =         $formValues["googleLink"]; //GOOGLE+ LINK, LEAVE BLANK IF THEY DONT HAVE ONE
  $pinterestLink =      $formValues["pinterestLink"]; //PINTEREST LINK, LEAVE BLANK IF THEY DONT HAVE ONE


  // BUILDS NAVIGATION
  $aboutUsNav = '';     
    if (isset($formValues["aboutUsNav"])) {$aboutUsNav = "true";}
  $photosNav = '';
    if (isset($formValues["photosNav"])) {$photosNav = "true";}
  $menuNav = '';
    if (isset($formValues["menuNav"])) {$menuNav = "true";}
  $marketplaceNav = '';     
    if (isset($formValues["marketplaceNav"])) {$marketplaceNav = "true";}
  $couponsNav = '';
    if (isset($formValues["couponsNav"])) {$couponsNav = "true";}
  $giftCertificateNav = '';
    if (isset($formValues["giftCertificateNav"])) {$giftCertificateNav = "true";}
  $eventsNav = '';
    if (isset($formValues["eventsNav"])) {$eventsNav = "true";}
  $reviewsNav = '';
    if (isset($formValues["reviewsNav"])) {$reviewsNav = "true";}
  $newsletterNav = '';
    if (isset($formValues["newsletterNav"])) {$newsletterNav = "true";}
  $blogNav = '';
    if (isset($formValues["blogNav"])) {$blogNav = "true";}
  $contactNav = '';
    if (isset($formValues["contactNav"])) {$contactNav = "true";}
  
  
  
  // BEGINING OF STYLE CONFIGURATION
  $bgColor =              $formValues["bgColor"]; //BACKGROUND COLOR OF ENTIRE SITE
  $h1Color =              $formValues["h1Color"];
  $h1TextSize =           $formValues["h1TextSize"];
  $linkColor =            $formValues["linkColor"];
  $mainTextColor =        $formValues["mainTextColor"];
  $mainFont =             $formValues["mainFont"];
  $mainTextSize =         $formValues["mainTextSize"];

  $headerBgColor =        $formValues["headerBgColor"];
  $navColor =             $formValues["navColor"];
  $navLinkColor =         $formValues["navLinkColor"];
  $navFont =              $formValues["navFont"];
  $phoneColor =           $formValues["phoneColor"];
  $phoneFont =            $formValues["phoneFont"];

  $enableSlider = '';
    if (isset($formValues["enableSlider"])) {$enableSlider = "true";}

  $bannerImgLink1 =       $formValues["bannerImgLink1"];
  $enableBanner1 = '';
    if (isset($formValues["enableBanner1"])) {$enableBanner1 = "true";}

  $bannerImgLink2 =       $formValues["bannerImgLink2"];
  $enableBanner2 = '';
    if (isset($formValues["enableBanner2"])) {$enableBanner2 = "true";}

  $bannerImgLink3 =       $formValues["bannerImgLink3"];
  $enableBanner3 = '';
    if (isset($formValues["enableBanner3"])) {$enableBanner3 = "true";}

  $bannerImgLink4 =       $formValues["bannerImgLink4"];
  $enableBanner4 = '';
    if (isset($formValues["enableBanner4"])) {$enableBanner4 = "true";}

  $aboutBgColor =         $formValues["aboutBgColor"];
  $aboutTextColor =       $formValues["aboutTextColor"];
  $aboutTextSize =        $formValues["aboutTextSize"];
  $aboutFont =            $formValues["aboutFont"];

  $newsfeedBgColor =      $formValues["newsfeedBgColor"];
  $newsfeedTextColor =    $formValues["newsfeedTextColor"];
  $newsfeedTextSize =     $formValues["newsfeedTextSize"];
  $newsfeedDateColor =    $formValues["newsfeedDateColor"];
  $newsfeedFont =         $formValues["newsfeedFont"];
  $footerBgColor =        $formValues["footerBgColor"];
  $footerNavFont =        $formValues["footerNavFont"];
  $footerNavColor =       $formValues["footerNavColor"];

  $footerCopyrightColor = $formValues["footerCopyrightColor"];

  $analytics =            $formValues["analytics"];

  include $masterPath.'/config/_functions.php';
?>