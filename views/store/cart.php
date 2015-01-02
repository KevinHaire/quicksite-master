<div class="cartContainer ng-cloak" ng-controller="cart">
	<div ng-show="cart.CARTS[0].CARTITEMS.length != 0">
		<h1 style="text-align:center;">Cart</h1>
		<div ng-repeat="singleCart in cart.CARTS">
			<div class="cartItem cartColor" ng-repeat="cartItem in singleCart.CARTITEMS">
				<div class="removeItem" ng-click="removeItem(cartItem.CARTITEMID, $event, $index)"></div>
				<div class="left">
					<h1 ng-bind-html="cartItem.TITLE"></h1>
					<h1>{{cartItem.PRICE | currency}} each</h1>
					<div class="cartItemImg">
						<img ng-src="{{cartItem.THUMBIMAGESRC}}" alt="">
					</div>
					<p ng-repeat="selectedOption in cartItem.OPTIONS">
						{{selectedOption.LABEL}}: {{selectedOption.VALUE}} - {{selectedOption.PRICEADJUSTMENT | currency}}
						<input type="hidden" ng-model="selectedOption.PRICEADJUSTMENT">
					</p>
				</div>
				<div class="right">
					Qty: <input ng-required type="number" ng-model="cartItem.QUANTITY"><br>
					<input class="itemPrice" type="hidden" ng-model="cartItem.PRICE"><br>
					Price: {{getLineTotal($index) | currency}}
				</div>
			</div>
		</div>
		<div class="cartTotals">
			<h1>Shipping: {{cart.CARTS[0].SUMMARY.TOTALSHIPPING | currency}}</h1>
			<h1>Subtotal: {{getTotal() + cart.CARTS[0].SUMMARY.TOTALSHIPPING | currency}}</h1>
			<h1>Taxes: {{(getTotal() + cart.CARTS[0].SUMMARY.TOTALSHIPPING) * .13 | currency}}</h1>
			<h1>Total: {{(getTotal() + cart.CARTS[0].SUMMARY.TOTALSHIPPING) * 1.13 | currency}}</h1>
			<div class="button">
				<button ng-click="checkout()">
					checkout
				</button>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>
	<div style="text-align:center;" ng-hide="cart.CARTS[0].CARTITEMS.length != 0">
		<h1>Your Cart is empty.</h1>
		<div class="button">
			<a href="page.php?page=cart&pageType=store&pageName=Store">
				<button>Continue Shopping</button>
			</a>
		</div>
	</div>
</div>