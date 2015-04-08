<h1 class="center">Image Galleries</h1>

<div class="albumsContainer" ng-controller="AlbumList">
	<div class="album" ng-repeat="album in albums.albums">
		<a href="page.php?pageType=singlegallery&albumid={{album.albumId}}">
			<div>
				<img ng-src="{{album.thumbnailUrl}}" alt="">
			</div>
			<span>{{album.description}}</span>
		</a>
	</div>
</div>