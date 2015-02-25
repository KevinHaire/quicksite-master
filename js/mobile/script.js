$('.fullSite').click(function() {
$.cookie('fullSite', '1');
})


'use strict';

/**
* @ngdoc overview
* @name quicksiteMobile
* @description
* # quicksiteMobile
*
* Main module of the application.
*/
var quicksiteMobile = angular.module('quicksiteMobile', 
	[
		'ngSanitize',
		'ngRoute', 
		'quicksiteMobileControllers'
	]
);


var quicksiteMobile = angular.module('quicksiteMobileControllers',[]);

quicksiteMobile.controller('homepageContent',['$scope', '$http', function ($scope, $http) {
	var bizId = $('.bizId').val();
	$http.get('http://shopcity.com/webApps/api/webpage/?listingid='+bizId+'&pageid=100')
	.then(function (response) {
		$scope.wPageContent = response.data;
    });
	$http.get('http://www.shopmidland.com/webApps/api/listing/?listingId='+bizId)
	.then(function (response) {
		$scope.bizInfo = response.data;
    });
}]);