$(document).ready(function() {

	var i = $('.navItem').length;
	$('.newNav').click(function(){
		newNavItem = 	'<li class="navItem nav_'+i+'">'+
										'<div class="exit"></div>'+
										'<label for="">Title:</label>'+
										'<input id="title'+i+'" data-id="'+i+'" type="text" />'+
										'<label for="">Type:</label>'+
										'<select id="type'+i+'" data-id="'+i+'" type="select" name="">'+
											'<option value="photos">Photos</option>'+
											'<option value="webpage">Webpage</option>'+
											'<option value="events">Events</option>'+
											'<option value="newsletter">Newsletter</option>'+
											'<option value="posts">Posts</option>'+
											'<option value="contact">Contact</option>'+
											'<option value="cart">Shopping Cart</option>'+
											'<option value="giftCertificates">Gift Certificates</option>'+
											'<option value="coupons">Coupons</option>'+
											'<option value="reviews">Reviews</option>'+
											'<option value="blog">Blog</option>'+
										'</select>'+
										'<label for="">Target:</label>'+
										'<select id="target'+i+'" data-id="'+i+'" type="select" name="">'+
											'<option value="_self">_self (default)</option>'+
											'<option value="_blank">_blank (new tab)</option>'+
										'</select>'+
										'<label for="">Parameters:</label>'+
										'<input id="parameters'+i+'" data-id="'+i+'" type="text" />'+
										'<input id="hidden'+i+'" data-id="'+i+'" type="hidden" name="navOptions[]" />'+
									'</li>';

		$(newNavItem).appendTo('.navItems');
		i++;
		$('.exit').click(function() {
			remove($(this));
		})
		$('input').on("keyup", function() {
			updateNavOptions($(this));
		})
		$('select').change(function() {
			updateNavOptions($(this));
		})
		return false;
	})

	$('.navItems').sortable();

	$('.exit').click(function() {
		remove($(this));
	})

	$('input').on("keyup", function() {
		updateNavOptions($(this));
	})
	$('select').change(function() {
		updateNavOptions($(this));
	})

})// END OF DOCUMENT READY


function remove(obj) {
	$(obj).parent().remove();
}

function updateNavOptions(obj) {
	id = obj.data('id');
	if ($('#type'+id).val() == 'webpage') {
		if ($('#parameters'+id).val() == '') {
			$('#parameters'+id).val('&wPageId=');			
		}
	}
	title = $('#title'+id).val();
	type = $('#type'+id).val();
	target = $('#target'+id).val();
	parameters = $('#parameters'+id).val();

	$('#hidden'+id).val(
		title + '|' +
		type + '|' +
		target + '|' +
		parameters
		);

	console.log($('#hidden'+id).val());

}