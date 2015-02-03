    <?php
      if (isset($_GET['productId']) || isset($_GET['productid'])) {
        include $masterPath.'/views/store/productDetail.php';
      } else {
        if ($pageType == 'gallery') {
          echo '<a class="sc-widget-photos sc-forceAutoStyle-1 sc-business-'.$bizId.' sc-startingAlbumID-'.$galleryId.'" href="##">Photos</a>';
        }
        else  if ($pageType == 'webpage'){
          echo '<a class="sc-widget-content sc-forceAutoStyle-1 sc-business-'.$bizId.' sc-page-'.$wPageId.'" href="##">Webpage</a>';
        }
        else if ($pageType == 'events') {
          echo '<a class="sc-widget-events sc-forceAutoStyle-1 sc-business-'.$bizId.'" href="##">Events</a>';
        }
        else if ($pageType == 'newsletter') {
          echo '<a class="sc-widget-newsletter sc-forceAutoStyle-1 sc-business-'.$bizId.'" href="##">News</a>';
        }
        else if ($pageType == 'posts') {
          echo '<a class="sc-widget-posts sc-forceAutoStyle-1 sc-business-'.$bizId.'" href="##">Posts</a>';
        }
        else if ($pageType == 'contact') {
          echo '<a class="sc-widget-contact sc-forceAutoStyle-1 sc-business-'.$bizId.'" href="##">Contact Information</a>';
        }
        else if ($pageType == 'gift') {
          echo '<a class="sc-widget-giftcertificates sc-forceAutoStyle-1 sc-business-'.$bizId.'" href="##">Gift Certificates</a>';
        }
        else if ($pageType == 'coupons') {
          echo '<a class="sc-widget-coupons sc-forceAutoStyle-1 sc-business-'.$bizId.'" href="##">Coupons</a>';
        }
        else if ($pageType == 'reviews') {
          echo '<a class="sc-widget-testimonials sc-forceAutoStyle-1 sc-business-'.$bizId.'" href="##">Reviews</a>';
        }
        else if ($pageType == 'blog') {
          echo '<a class="sc-widget-blog sc-forceAutoStyle-1 sc-business-'.$bizId.'" href="##">Blog</a>';
        }
        else if ($pageType == 'directory') {
          echo '<a class="sc-widget-members sc-business-'.$bizId.'" href="##">Members</a>';
        }

        if ($pageType == 'store') {
          include $masterPath.'/views/store/productList.php';
        }
        else if ($pageType == 'productList') {
          include $masterPath.'/views/store/productList.php';
        }
        else if ($pageType == 'productDetail') {
          include $masterPath.'/views/store/productDetail.php';
        }
        else if ($pageType == 'cart') {
          include $masterPath.'/views/store/cart.php';
        }
        else if ($pageType == 'checkout') {
          include $masterPath.'/views/store/checkout.php';
        }
        else if ($pageType == 'results') {
          include $masterPath.'/views/store/results.php';
        }
        else if ($pageType == 'singleCat') {
          include $masterPath.'/views/store/singleCatProductList.php';
        }
      }



    ?>