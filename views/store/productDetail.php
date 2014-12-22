<div ng-controller="productDetail" class="ng-cloak">
	<h1 class="pageProductTitle">{{productDetail.PRODUCT.TITLE}}</h1>
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

		<div ng-show="productDetail.PRODUCT.PRICEDETAILS.ISONSALE" class="productInfoOnSale">
			<h1>On Sale!</h1>
			<p class="priceOnSale">{{productDetail.PRODUCT.PRICEDETAILS.PRICE | currency}}</p>
			<p class="priceRegular">Regular Price: {{productDetail.PRODUCT.PRICEDETAILS.PRICEREGULAR | currency}}</p>
		</div>

		<div ng-hide="productDetail.PRODUCT.PRICEDETAILS.ISONSALE" class="productInfo">
			<p class="price">{{productDetail.PRODUCT.PRICEDETAILS.PRICE | currency}}</p>
		</div>

		<div ng-controller="addToCart" ng-show="productDetail.PRODUCT.SHIPDETAILS.CANSHIP" class="productCanShip">
			<form novalidate id="scProductOptionsForm" action="">
				<input type="hidden" name="productId" value="{{productDetail.PRODUCT.PRODUCTID}}">
				<input type="hidden" id="cartId" name="cartId" value="0">
				<input type="hidden" id="randomId" name="randomId" value="0">
				<label for="quantity">Quantity:</label>
				<input ng-model="quantity" type="number" name="quantity" value="" required>
				<div class="productOptionContainer" ng-repeat="productOption in productDetail.PRODUCT.OPTIONS">
					<select 
						ng-if="productDetail.PRODUCT.OPTIONS != 0" 
						name="option_{{productOption.OPTIONID}}"
						ng-required="productOption.ISREQUIRED = 1"
					>
						<option ng-repeat="choice in productOption.CHOICES" value="{{choice.CHOICEID}}">{{choice.VALUE}} ({{choice.PRICEADJUSTMENT | currency}})</option>
					</select>
				</div>
			</form>
			<button ng-click="addToCart()" class="addToCart">Add To Cart</button>
		</div>

		<div ng-hide="productDetail.PRODUCT.SHIPDETAILS.CANSHIP">
			<p>Pick Up Only</p>
		</div>

		<p class="productDescription" ng-bind-html="productDetail.PRODUCT.DESCRIPTION"></p>

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