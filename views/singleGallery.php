

<div ng-controller="SingleGallery" class="ng-cloak">

	<h1 class="center">{{photos.meta.description}}</h1>
	<div class="slider">
		<!-- enumerate all photos -->
		<img ng-repeat="photo in photos.photos" class="slide" ng-swipe-right="showPrev()" ng-swipe-left="showNext()" ng-show="isActive($index)" ng-src="{{photo.imageUrl}}" />

		<!-- prev / next controls -->
		<a class="arrow prev" href="" ng-click="showPrev();">
      <svg version="1.1" id="prevArrow" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
      xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="33px"
      viewBox="0 0 20 33" enable-background="new 0 0 20 33" xml:space="preserve">
      <path fill="#666666" d="M2.932,32.516l-0.089-0.088L1.146,30.73l-0.088-0.088l0.088-0.09C5.83,25.87,10.516,21.186,15.199,16.5
      C10.514,11.815,5.83,7.13,1.146,2.446l-0.09-0.088l0.09-0.089l1.697-1.697l0.088-0.088L3.02,0.572l15.838,15.839l0.088,0.089
      l-0.088,0.087L3.02,32.428L2.932,32.516z"/>
      <path fill="none" stroke="#FFFFFF" stroke-width="0.25" stroke-miterlimit="10" d="M2.932,32.516l-0.089-0.088L1.146,30.73
      l-0.088-0.088l0.088-0.09C5.83,25.87,10.516,21.186,15.199,16.5C10.514,11.815,5.83,7.13,1.146,2.446l-0.09-0.088l0.09-0.089
      l1.697-1.697l0.088-0.088L3.02,0.572l15.838,15.839l0.088,0.089l-0.088,0.087L3.02,32.428L2.932,32.516z"/>
      </svg>  
    </a>
		<a class="arrow next" href="" ng-click="showNext();">
      <svg version="1.1" id="nextArrow" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
      xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="33px"
      viewBox="0 0 20 33" enable-background="new 0 0 20 33" xml:space="preserve">
      <path fill="#666666" d="M2.932,32.516l-0.089-0.088L1.146,30.73l-0.088-0.088l0.088-0.09C5.83,25.87,10.516,21.186,15.199,16.5
      C10.514,11.815,5.83,7.13,1.146,2.446l-0.09-0.088l0.09-0.089l1.697-1.697l0.088-0.088L3.02,0.572l15.838,15.839l0.088,0.089
      l-0.088,0.087L3.02,32.428L2.932,32.516z"/>
      <path fill="none" stroke="#FFFFFF" stroke-width="0.25" stroke-miterlimit="10" d="M2.932,32.516l-0.089-0.088L1.146,30.73
      l-0.088-0.088l0.088-0.09C5.83,25.87,10.516,21.186,15.199,16.5C10.514,11.815,5.83,7.13,1.146,2.446l-0.09-0.088l0.09-0.089
      l1.697-1.697l0.088-0.088L3.02,0.572l15.838,15.839l0.088,0.089l-0.088,0.087L3.02,32.428L2.932,32.516z"/>
      </svg>      
    </a>

	<!-- extra navigation controls -->        
	</div>

	<div class="navWrapper">
		<ul>
		    <li ng-repeat="photo in photos.photos" ng-class="{'active':isActive($index)}">
		        <img ng-src="{{photo.imageUrl}}" ng-click="showPhoto($index);" />
		    </li>
		</ul>
	</div>

</div>
