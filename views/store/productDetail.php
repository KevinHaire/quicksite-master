<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div ng-controller="productDetail" class="ng-cloak">
	<input class="bizCity" type="hidden" value="<?php echo $bizCity ?>">
	
	<h1 class="pageProductTitle" ng-bind-html="productDetail.PRODUCT.TITLE"></h1>

	<div ng-controller="catList" class="cartSideBar cartColor">
		<!-- <input ng-model="catSearch" type="search" placeholder="Product Search" class="searchBox"> -->
		<ul>
			<li><a href="page.php?page=cart&pageType=store&pageName=Products">View All</a></li>
			<li ng-repeat="cat in catList.MICROCATS">
				<a href="page.php?page=productList&pageType=productList&catId={{cat.CATID}}">
					{{cat.CATNAME}}
				</a>
			</li>
		</ul>
	</div>

	<div class="productImages">
		<div class="galleryContainer cartColor">		
			<div class="albumImage">
				<a href="##"><img ng-src="{{currentImage.FULLIMAGESRC}}" alt=""></a>
			</div>

			<div class="thumbWrapper">
				<ul class="thumbList">
					<li>
						<img ng-src="{{productDetail.PRODUCT.THUMBIMAGESRC}}" ng-click="setCurrentImage(productDetail.PRODUCT)">
					</li>
					<li ng-repeat="productImage in productDetail.PRODUCT.EXTRA_IMAGES" ng-click="setCurrentImage(productImage)">
						<img ng-src="{{productImage.THUMBIMAGESRC}}">
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="productOptions">
		
		<!-- PRICE OF PRODUCT THAT IS ON SALE -->
		<div ng-show="productDetail.PRODUCT.PRICEDETAILS.ISONSALE" class="productInfoOnSale">
			<h1>On Sale!</h1>
			<p class="priceOnSale">{{productDetail.PRODUCT.PRICEDETAILS.PRICE | currency}}</p>
			<p class="priceRegular">Regular Price: {{productDetail.PRODUCT.PRICEDETAILS.PRICEREGULAR | currency}}</p>
		</div>
		
		<!-- DISPLAYS TEXT IF PRICE FIELD HAS TEXT OR PRICE BUT IS NOT ONLINE -->
		<div ng-hide="productDetail.PRODUCT.PRICEDETAILS.ISONLINE" class="productInfo">
			<p class="price">{{productDetail.PRODUCT.PRICEDETAILS.PRICE}}</p>
		</div>
	
		<!-- PRICE OF PRODUCTS THAT ARE NOT ON SALE -->
		<div ng-show="productDetail.PRODUCT.PRICEDETAILS.ISONLINE" class="productInfo">
			<div ng-hide="productDetail.PRODUCT.PRICEDETAILS.ISONSALE" class="productInfoOnSale">
				<p class="price">{{productDetail.PRODUCT.PRICEDETAILS.PRICE | currency}}  <span>  In-stock</span></p>
			</div>
		</div>


		<!-- DISPLAYS ON EVERY PRODUCT -->
		<div class="shareButtons">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td style="padding-right:5px;padding-left:6px;">
						<div class="fb-like" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
					</td>
					<td style="padding-right:5px;">
						<a href='javascript:void(run_pinmarklet1())'>
							<img src="http://2.bp.blogspot.com/-lRae8bdMpuA/TzuLrnycXaI/AAAAAAAACQE/YVYUjfs7dm8/s1600/pinmask2.png" style='margin:0; padding:0; border:none;'/>
						</a>
						<script type='text/javascript'>
							function run_pinmarklet1() {
							  var e=document.createElement('script');
							  e.setAttribute('type','text/javascript');
							  e.setAttribute('charset','UTF-8');
							  e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);
							  document.body.appendChild(e);
							}
						</script>
					</td>
					<td style="padding-right:5px;">
						<!-- Place this tag where you want the +1 button to render -->
						<g:plusone annotation="none"></g:plusone>

						<!-- Place this render call where appropriate -->
						<script type="text/javascript">
						  (function() {
						    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
						    po.src = 'https://apis.google.com/js/plusone.js';
						    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
						  })();
						</script>
					</td>
				</tr>
			</table>
		</div>
		<!-- END OF SOCIAL MEDIA BUTTONS -->

		<!-- QUANTITY / OPTIONS / ADD TO CART BUTTON IF ISONLINE -->
		<div ng-controller="addToCart" ng-show="productDetail.PRODUCT.PRICEDETAILS.ISONLINE" class="productCanShip">
			<form novalidate id="scProductOptionsForm" action="">
				<input type="hidden" name="productId" value="{{productDetail.PRODUCT.PRODUCTID}}">
				<input type="hidden" id="cartId" name="cartId" value="0">
				<input type="hidden" id="randomId" name="randomId" value="0">
				<input ng-model="quantity" type="number" name="quantity" value="" required class="quantityInput">
				<div class="productOptionContainer" ng-repeat="productOption in productDetail.PRODUCT.OPTIONS">
					<div class="selectArrow"></div>
					<select 
						ng-if="productDetail.PRODUCT.OPTIONS != 0" 
						name="option_{{productOption.OPTIONID}}"
						ng-required="productOption.ISREQUIRED"
					>
						<option ng-if="productOption.ISREQUIRED = 1" selected disabled value="0">{{productOption.LABEL}}</option>
						<option ng-repeat="choice in productOption.CHOICES" value="{{choice.CHOICEID}}">{{choice.VALUE}} - {{choice.PRICEADJUSTMENT | currency}}</option>
					</select>
				</div>
			</form>
			<button ng-click="addToCart()" class="addToCart">Add To Cart</button>
		</div>
		<!-- END OF QUANTITY / OPTIONS / ADD TO CART -->

		<div ng-hide="productDetail.PRODUCT.PRICEDETAILS.ISONLINE" class="inquire">
			<button class="inquireButton">Inquire</button>
			<div class="inquireForm">
				<form novalidate action="">
					<input required id="listingId" type="hidden" name="listingId" value="<?php echo $bizId ?>">
					<input required id="directoryId" type="hidden" name="directoryId" value="{{productDetail.PRODUCT.DIRECTORYID}}">
					<input required id="productId" type="hidden" name="productId" value="{{productDetail.PRODUCT.PRODUCTID}}">
					<input ng-model="name" required type="text" name="name" placeholder="Name">
					<input ng-model="city" required type="text" name="city" placeholder="City">
					<input ng-model="email" required type="email" name="email" placeholder="Email">
					<input ng-model="phone" required type="phone" name="phone" placeholder="Phone Number">
					<textarea ng-model="content" required name="content" id="" cols="30" rows="6" placeholder="Inquiry"></textarea>
					<button class="sendInquiry" ng-click="sendInquiry()">Send</button>
				</form>
			</div>
		</div>

		<div ng-hide="productDetail.PRODUCT.SHIPDETAILS.CANSHIP">
			<p>Pick Up Only</p>
		</div>

		<p>Product ID: {{productDetail.PRODUCT.PRODUCTID}}</p>

	</div>
		
	<div style="clear:both;"></div>

	<div class="productDescription">
		<h2>Product Description</h2>
		<p ng-bind-html="productDetail.PRODUCT.DESCRIPTION"></p>
	</div>

	<div style="clear:both;"></div>

	<div ng-if="productDetail.PRODUCT.SUGGESTEDPRODUCTS.length != 0" class="suggestedProducts">
		<h1>Suggested Products:</h1>
		<div ng-repeat="suggestedProduct in productDetail.PRODUCT.SUGGESTEDPRODUCTS" class="item">
			<div class="innerItem cartColor">
				<a href="page.php?page=productDetail&pageType=productDetail&productId={{suggestedProduct.PRODUCTID}}">
					<div class="itemImg">
						<img ng-src="{{suggestedProduct.THUMBIMAGESRC}}" alt="{{suggestedProduct.CATNAME}}">
					</div>
					<div class="itemInfo">
						<h3 ng-bind-html="suggestedProduct.TITLE | limitTo:36"></h3>
					</div>
				</a>
			</div>
		</div>
	</div>


	<div style="clear:both;"></div>
	<div class="productInfo">
	</div>
</div>








<!-- <h1>{{productDetail.PRODUCT.TITLE}}</h1>
	<form ng-controller="addToCart" action="" id="scProductOptionsForm" name="scProductOptionsForm">
		<input type="hidden" name="productId" value="{{productDetail.PRODUCT.PRODUCTID}}">
		<input type="number" name="quantity" value="1">
		<input type="hidden" id="cartId" name="cartId" value="0">
		<input type="hidden" id="randomId" name="randomId" value="0">
		<button class="addToCart">Add To Cart</button>
	</form> -->