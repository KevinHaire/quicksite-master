<?php 

  $mode = '';

  if ($mode == 'dev') {
    $assetDomain = 'quicksitemaster.kev';
    $cssPath = '/css/minified/global.min.css';
    $mainJsPath = '/js/build/script.build.js';
    $cartJsPath = '/js/build/quicksite.build.js';
  } else {
    $assetDomain = 'www.shopcitywebsites.com/assets';
    $cssPath = '/css/global.min.cb.css';
    $mainJsPath = '/js/script.build.js';
    $cartJsPath = '/js/quicksite.build.js';
  }
  
  $metaDesc =           $formValues["metaDesc"]; //FILLS IN META DESCRIPTION IN THE HEAD
  
  $redirect = 'true';
  if ($formValues["mobileRedirect"] == "false") {
    $redirect = "false";
  }

  $bizName =            $formValues["bizName"];
  $bizPhone =           $formValues["bizPhone"];
  $bizCity =            $formValues["bizCity"];
  $bizProvince =        $formValues["bizProvince"];
  $shopDomain =         $formValues["shopDomain"];
  $bizId =              $formValues["bizId"];
  $logoUrl =            $formValues["logoUrl"];

  $shopLink =           $formValues["shopLink"];
  $facebookLink =       $formValues["facebookLink"];
  $twitterLink =        $formValues["twitterLink"];
  $instagramLink =      $formValues["instagramLink"];
  $googleLink =         $formValues["googleLink"];
  $pinterestLink =      $formValues["pinterestLink"]; 
  $youtubeLink =        $formValues["youtubeLink"];

  // BEGINING OF STYLE CONFIGURATION
  if (!$formValues["cartAccent"] || $formValues["cartAccent"] == ''){
    $cartAccent = $formValues["navColor"];
  } else {
    $cartAccent = $formValues["cartAccent"];
  }
  $bgColor =              $formValues["bgColor"];
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