<h1 style="margin-bottom:2em;">Reviews</h1>

<div ng-controller="reviews">

	<script type="text/ng-template" id="reviewTree">
	    <h2>{{review.name}} from: {{review.location}}</h2>
	    <p class="datePosted">{{review.posted | date:'longDate'}}</p>
	    <hr>
	    <p>{{review.review}}</p>
	    <div ng-if="review.replies">
	        <div class="subReview" ng-repeat="review in review.replies" ng-include="'reviewTree'"></div>
	    </div>
	</script>

	<div class="review" dir-paginate="review in reviews | itemsPerPage:6" ng-include="'reviewTree'"></div>
    <!-- <div class="review" ng-repeat="review in reviews" ng-include="'reviewTree'"></div> -->
	<dir-pagination-controls max-size="6" template-url="http://shopcitywebsites.com/assets/templates/dirPagination.tpl.html"></dir-pagination-controls>

</div>