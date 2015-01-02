'use strict';

/**
 * @ngdoc overview
 * @name qsCart
 * @description
 * # qsCart
 *
 * Main module of the application.
 */


var qsCart = angular.module('qsCart', [
  'ngSanitize',
  'ngRoute'
  ]
);

function getQueryString(name) {
	name = name.toLowerCase();
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
	var results = regex.exec(location.search.toLowerCase());
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function cartCookiesAdd() {
	$.cookie('cartId', $('#cartId').val());
	$.cookie('randomId', $('#randomId').val());
}

var listingId = $('#listingId').val();







qsCart.controller('catList', ['$scope', '$http', function($scope, $http) {
   $http.get('http://www.shopcity.com/webApps/api/microcats/index.cfm?listingid='+listingId+'')
    .then(function (response) {
      $scope.catList = response.data;
    });
}]);

qsCart.controller('productList', ['$scope', '$http', function($scope, $http) {
	if (getQueryString('singleCat') != '') {
		var catId = getQueryString('singleCat');
	} else {
		var catId = getQueryString('catId');
	}
	if (catId == ''){catId = 0};
  $http.get('http://www.shopcity.com/webApps/api/productlist/index.cfm?categoryid='+catId+'&listingid='+listingId+'')
    .then(function (response) {
    $('#workingGif').hide();
	console.log(response.data);
    $scope.productList = response.data;
  });
}]);

qsCart.controller('productDetail', ['$scope', '$http', function($scope, $http) {
	var productId = getQueryString('productId');
  $http.get('http://www.shopcity.com/webApps/api/productdetails/index.cfm?productid='+productId+'')
    .then(function (response) {
    console.log(response.data);
    $scope.productDetail = response.data;
    $scope.currentImage = $scope.productDetail.PRODUCT;
    $scope.setCurrentImage = function(productImage) {
    	$scope.currentImage = productImage;
    }
  });
}]);

qsCart.controller('addToCart', ['$scope', '$http', function($scope, $http) {
  if ($.cookie('cartId')) {
  	$('#cartId').val($.cookie('cartId'));
  }
  if ($.cookie('randomId')) {
  	$('#randomId').val($.cookie('randomId'));
  }

  $scope.quantity = 1;
	
	$scope.addToCart = function() {
		if ($('#scProductOptionsForm').hasClass('ng-valid')) {
			$.ajax({
				url: 'http://www.shopcity.com/webApps/api/cart/add/index.cfm',
				method: 'post',
				data: $('#scProductOptionsForm').serialize(),
				success: function(response) {
					console.log(response);
					$('#cartId').val(response.CARTID);
					$('#randomId').val(response.RANDOMID);
					cartCookiesAdd();
					if (parseInt(response) == 0) {
						console.log('not added to cart');
					}else {
						console.log('added to cart');
						window.location = 'page.php?page=cart&pageType=cart';
					}
				},
				error: function(x,y,z) {
					console.log(y);
					console.log(z);
				}
			})
		} else {
			alert('Please select all options');
		}
	};

	


}]);

qsCart.controller('cart', ['$scope', '$http', function($scope, $http) {

	if ($.cookie('cartId')) {
		
		$('.cartIcon').css('visibility', 'visible');
		var cartId = $.cookie('cartId');
		var randomId = $.cookie('randomId');
	  $http.get('http://www.shopcity.com/webApps/api/cart/index.cfm?cartid='+cartId+'&randomid='+randomId+'&listingid='+listingId+'')
	    .then(function (response) {
	    $scope.cart = response.data;
	    console.log(response.data);

	    $scope.getLineTotal = function($index) {
	    	var optionsTotal = 0;
	    	var itemWOptions = 0;
	    	if ($scope.cart.CARTS[0].CARTITEMS[$index].OPTIONS.length != 0) {
	    		angular.forEach($scope.cart.CARTS[0].CARTITEMS[$index].OPTIONS, function(option) {
	    			optionsTotal += option.PRICEADJUSTMENT;
	    		})
	    		itemWOptions = optionsTotal + $scope.cart.CARTS[0].CARTITEMS[$index].PRICE;
	    		return itemWOptions * $scope.cart.CARTS[0].CARTITEMS[$index].QUANTITY;
	    	}
	    }

	    $scope.getTotal = function() {
	    	var total = 0;
	      angular.forEach($scope.cart.CARTS[0].CARTITEMS, function(cartItem) {
	      	var runningOptionTotal = 0;
	      	if (cartItem.OPTIONS.length != 0) {
	      		angular.forEach(cartItem.OPTIONS, function(option) {
	      			runningOptionTotal += option.PRICEADJUSTMENT;
	      		})
	      	}
	        total += (cartItem.PRICE + runningOptionTotal) * cartItem.QUANTITY;
	      })
	      return total;
	    }

	    $scope.checkout = function() {
	    	angular.forEach($scope.cart.CARTS[0].CARTITEMS, function(cartItem) {
	    		if (cartItem.QUANTITY != null) {
		    		$http.get('http://www.shopcity.com/webApps/api/cart/update/index.cfm?cartid='+cartId+'&randomid='+randomId+'&cartitemid='+cartItem.CARTITEMID+'&quantity='+cartItem.QUANTITY+'');
		    		console.log(cartId, randomId);
	    		} else {
	    			alert('please put a quantity for all items');
	    		}
	    	})
	    	window.location = "page.php?page=checkout&pageType=checkout";
	    }

	    $scope.removeItem = function(cartItemId, $event, index) {
	    	$http.get('http://www.shopcity.com/webApps/api/cart/update/index.cfm?cartid='+cartId+'&randomid='+randomId+'&cartitemid='+cartItemId+'&quantity=0');
	    	$scope.cart.CARTS[0].CARTITEMS.splice(index, 1);
	    	var elm = $event.currentTarget;
	    	$(elm).parent().remove();
	    	//THIS WILL DELETE COOKIES IF CART IS EMPTY, NOT SURE IF IM GOING TO USE
	    	if ($scope.cart.CARTS[0].CARTITEMS.length == 0) {
	    		$.removeCookie('cartId');
	    		$.removeCookie('randomId');

	    	}
	    }

	  });
	}
}]);



/////////////////////CEHCKOUT
	$('#shipping_same_as_billing').click(function() {
		if($(this).is(':checked')) {
			$(this).attr('value', '1');
			$($('.shippingInformation').css('display', 'none'));
			$('.required').attr('required', false);
		} else {
			$(this).attr('value', '0');
			$('.required').attr('required', true);
			$($('.shippingInformation').css('display', 'block'));
		}
	})

	$('#pickUp').click(function() {
		if($(this).is(':checked')) {
			$(this).attr('value', '1');
			$($('.shippingInformation, .sameAsBilling').css('display', 'none'));
			$('.required').attr('required', false);
		} else {
			$(this).attr('value', '0');
			$('.required').attr('required', true);
			$($('.shippingInformation, .sameAsBilling').css('display', 'block'));
		}
	})

	$("#checkoutForm").submit(function(event) {
		event.preventDefault();


		var data = {
			cartId: $.cookie('cartId')
			,randomId: $.cookie('randomId')
			,listingIdList: listingId
			,shipping_same_as_billing: $('#shipping_same_as_billing').val()
			,shipType: $('#pickUp').val()
			,cancelUrl: window.location.host
			,returnUrl: window.location.host // complete
			,firstname: $('#firstName').val()
			,lastname: $('#lastName').val()
			,email: $('#email').val()
			,company: $('#company').val()
			,address1: $('#address1').val()
			,address2: $('#address2').val()
			,city: $('#city').val()
			,country: $('#country').val()
			,province: $('#province').val()
			,province_other: (($('#province2').length != 0) ? $('#province2').val() : '')
			,postal: $('#postal').val()
			,phone: $('#phone').val()

			,ship_firstname: $('#ship_firstName').val()
			,ship_lastname: $('#ship_lastName').val()
			,ship_email: $('#ship_email').val()
			,ship_company: $('#ship_company').val()
			,ship_address1: $('#ship_address1').val()
			,ship_address2: $('#ship_address2').val()
			,ship_city: $('#ship_city').val()
			,ship_country: $('#ship_country').val()
			,ship_province: $('#ship_province').val()
			,ship_province_other: (($('#ship_province2').length != 0) ? $('#ship_province2').val() : '')
			,ship_postal: $('#ship_postal').val()
			,ship_phone: $('#ship_phone').val()
		};

		console.log(data);

		$.ajax({
			url:"http://www.shopcity.com/webApps/api/cart/checkout/index.cfm"
			,method:"post"
			,data:data

			,success:function(results) {
				if (results.responseEnvelope.ack != 'Success') {
					console.log("PAYPAL ERROR");
					console.log(results);
				}
				else {
					// Full-page
					//window.location = "https://www.paypal.com/cgi-bin/webscr?cmd=_ap-payment&expType=mini&paykey="
					//	+ results.payKey;

					// Mobile
					window.location = "https://www.paypal.com/webapps/adaptivepayment/flow/pay?paykey="
						+ results.payKey;
				}
			}
			,error:function(x,y,z) {
				console.log("AJAX ERROR");
				console.log(y);
				console.log(z);
			}
		});
	});
