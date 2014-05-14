$(window).load(function() {

	//CALL FUNCTION TO FIGURE OUT PADDING FOR NAV
	fillNav();

	//CALL FUNCTION THAT VERTICALLY CENTERES LOGO
	//IF ITS NOT BIGGER THAN 120PX
	vertImage('.headerLeft img');

	//CALL FUNCTION TO PUT THE FOOTER AT THE BOTTOM OF THE PAGE IF
	//THE CONTENT ISNT TALL ENOUGH TO PUSH IT THERE
	stickyFooter('.mainContainer');
	stickyFooter('.about');

	//CALL FUNCTION TO MAKE POSTS COLUMN SAME HEIGHT AS ABOUT US IF ITS NOT ALREADY
	equalHeight();

	//SETS ON CLASS TO CURRENT PAGE IN NAVIGATION
	$(".mainNav a").each(function(){
		if ($(this).attr("href") == "page.php" + window.location.search) {
			$(this).parent().addClass("on");
		}
	})

}) //END OF WINDOW LOAD


//FUNCTION THAT FIGURES OUT PADDING FOR LIST ITEMS
//IN NAV SO IT ALWAYS FILLS CONTAINER (900PX)
function fillNav() {
	var nav = $('.mainNav ul');
	var li = $('.mainNav ul li');
	var a = $('.mainNav ul li a');

	navDiff = 899 - nav.width();
	padd = (navDiff / a.size()) / 2;
	a.css(
		{
			'padding-left': padd, 
			'padding-right': padd
		});
}

//FUNCTION TO VERTICALLY CENTER LOGO IF IT
//IS SMALLER THAN THE HEADER (120PX)
function vertImage(imgLocation) {
	if ($(imgLocation).height() < $(imgLocation).parent().parent().parent().height()){
		$(imgLocation).each(function(){
			imgHeight = $(this).height();
			topMargin = (120 - imgHeight) / 2;
			$(this).css('margin-top', topMargin+'px');
		})
	}
}

//FUNCTION TO PUT THE FOOTER AT THE BOTTOM OF THE PAGE IF
//THE CONTENT ISNT TALL ENOUGH TO PUSH IT THERE
function stickyFooter(elementToExpand) {
	var currentContentHeight = $(elementToExpand).innerHeight();
	var bodyHeight = $("body").height();
	var vpHeight = $(window).height();
	var contentHeight = vpHeight - bodyHeight
	$(elementToExpand).css({
    'min-height' : currentContentHeight + contentHeight       
  });
};
//CALL SAME FUNCTION AS ABOVE ON WINDOW RESIZE
$(window).resize(function(){
	stickyFooter('.mainContainer');
	stickyFooter('.about');
});
//TODO: NEEDS TO BE REDONE TO WORK PROPERLY
function equalHeight() {
	var aboutHeight = $('.about').innerHeight();
	var newsfeedHeight = $('.newsfeed').innerHeight();
	if (newsfeedHeight < aboutHeight) {
		$('.newsfeed').css('min-height', aboutHeight+80+'px');
	} 
}

