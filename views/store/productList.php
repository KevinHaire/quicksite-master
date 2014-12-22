<div ng-controller="productList" class="ng-cloak">
	<div class="cartSideBar cartColor">
		<input ng-model="productSearch" type="search" placeholder="Product Search" class="searchBox">
		<ul>
			<li ng-repeat="cat in productList.ALTCATEGORIES.CATEGORIES">
				<a href="page.php?page=productList&pageType=productList&catId={{cat.CATID}}">
					{{cat.CATNAME}}
				</a>
			</li>
		</ul>
	</div>

	<div class="cart75Content">
		<div ng-repeat="product in productList.PRODUCTS | filter:productSearch" class="item">
			<div class="innerItem cartColor">
				<a href="page.php?page=productDetail&pageType=productDetail&productId={{product.PRODUCTID}}">
					<div class="itemImg">
						<img ng-src="{{product.THUMBIMAGESRC}}" alt="{{product.CATNAME}}">
					</div>
					<div class="itemInfo">
						<h3 ng-bind-html="product.TITLE | limitTo:36"></h3>
						<span>Price: {{product.PRICEDETAILS.PRICE | currency}}</span>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div style="clear:both;"></div>
</div>