<div ng-controller="catList" class="ng-cloak">
	
	<div class="cartSideBar cartColor">
		<input ng-model="catSearch" type="search" placeholder="Category Search" class="searchBox">
		<ul>
			<li ng-repeat="cat in catList.MICROCATS">
				<a href="page.php?page=productList&pageType=productList&catId={{cat.CATID}}">
					{{cat.CATNAME}}
				</a>
			</li>
		</ul>
	</div>

	<div class="cart75Content">
		<div ng-repeat="cat in catList.MICROCATS | filter:catSearch" class="item">
			<div class="innerItem cartColor">
				<a href="page.php?page=productList&pageType=productList&catId={{cat.CATID}}">
					<div class="itemImg">
						<img ng-src="{{cat.THUMBIMAGESRC}}" alt="{{cat.CATNAME}}">
					</div>
					<div class="itemInfo">
						<h3>{{cat.CATNAME}}</h3>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div style="clear:both;"></div>
</div>