<div ng-controller="productList" class="ng-cloak">

	<div id="workingGif">

	  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	     width="100px" height="125px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
	    <rect x="0" y="13" width="4" height="5" fill="#333">
	      <animate attributeName="height" attributeType="XML"
	        values="5;21;5" 
	        begin="0s" dur="0.6s" repeatCount="indefinite" />
	      <animate attributeName="y" attributeType="XML"
	        values="13; 5; 13"
	        begin="0s" dur="0.6s" repeatCount="indefinite" />
	    </rect>
	    <rect x="10" y="13" width="4" height="5" fill="#333">
	      <animate attributeName="height" attributeType="XML"
	        values="5;21;5" 
	        begin="0.15s" dur="0.6s" repeatCount="indefinite" />
	      <animate attributeName="y" attributeType="XML"
	        values="13; 5; 13"
	        begin="0.15s" dur="0.6s" repeatCount="indefinite" />
	    </rect>
	    <rect x="20" y="13" width="4" height="5" fill="#333">
	      <animate attributeName="height" attributeType="XML"
	        values="5;21;5" 
	        begin="0.3s" dur="0.6s" repeatCount="indefinite" />
	      <animate attributeName="y" attributeType="XML"
	        values="13; 5; 13"
	        begin="0.3s" dur="0.6s" repeatCount="indefinite" />
	    </rect>
	  </svg>

	</div>


	<div class="cartSideBar cartColor">
		<form action="page.php?page=searchresults&pageType=results" method="POST">
			<input name="searchTerm" type="search" placeholder="Product Search" class="searchBox">	
		</form>
		<ul>
			<li><a href="page.php?page=cart&pageType=store&pageName=Products">View All</a></li>
			<li ng-repeat="cat in productList.ALTCATEGORIES.CATEGORIES">
				<a href="page.php?page=productList&pageType=singleCat&catId={{cat.CATID}}">
					{{cat.CATNAME}}
				</a>
			</li>
		</ul>
	</div>

	<div class="cart75Content">
		<div ng-repeat="product in productList.PRODUCTS | filter:productSearch" class="item">
			<div class="innerItem cartColor">
				<a href="page.php?page=productDetail&pageType=productDetail&productId={{product.PRODUCTID}}" title="{{product.TITLE}}">
					<div class="itemImg">
						<img ng-src="{{product.THUMBIMAGESRC}}" alt="{{product.CATNAME}}">
					</div>
					<div class="itemInfo">
						<h3 ng-bind-html="product.TITLE | limitTo:24"></h3>
						<span ng-show="product.PRICEDETAILS.ISONLINE">Price: {{product.PRICEDETAILS.PRICE | currency}}</span>
						<span ng-hide="product.PRICEDETAILS.ISONLINE">{{product.PRICEDETAILS.PRICE | limitTo:18}}</span>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div style="clear:both;"></div>
</div>