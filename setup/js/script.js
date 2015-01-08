$(document).ready(function() {
	var i = $('.navItem').length;
	$('.newNav').click(function(){
		newNavItem = 	'<li class="navItem nav_'+i+'">'+
										'<div class="exit"></div>'+
										'<label for="">Title:</label>'+
										'<input id="title'+i+'" data-id="'+i+'" type="text" />'+
										'<label for="">Type:</label>'+
										'<select id="type'+i+'" data-id="'+i+'" type="select" name="">'+
											'<option value="home">Home</option>'+
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
											'<option value="directory">Member Directory</option>'+
											'<option value="external">External Link</option>'+
										'</select>'+
										'<label for="">Target:</label>'+
										'<select id="target'+i+'" data-id="'+i+'" type="select" name="">'+
											'<option value="_self">_self (default)</option>'+
											'<option value="_blank">_blank (new tab)</option>'+
										'</select>'+
										'<label for="">Parameters:</label>'+
										'<input class="linkParams" id="parameters'+i+'" data-id="'+i+'" type="text" />'+
										'<label for="">Page Title:</label>'+
										'<input id="pageTitle'+i+'" data-id="'+i+'" type="text" />'+
										'<label for="">Meta Description:</label>'+
										'<textarea id="metaDescription'+i+'" data-id="'+i+'" type="text" /></textarea>'+
										'<input id="hidden'+i+'" data-id="'+i+'" type="hidden" name="navOptions[]" />'+
									'</li>';

		$(newNavItem).appendTo('.navItems');
		i++;
		$('.navItems').sortable();
		$('.exit').click(function() {
			remove($(this));
		})

		$('select').change(function() {
			updateNavParams($(this));
		})
		$('input, textarea').not('.linkParams').on('keyup', function () {
			this.value = this.value.replace("'", "");
			this.value = this.value.replace("|", "");
			this.value = this.value.replace(",", "");
		});
		$('input, textarea').on("keyup", function() {
			updateNavOptions($(this));
		})
		return false;
	})

	$('.navItems').sortable();

	$('.exit').click(function() {
		remove($(this));
	})

	$('select').change(function() {
		updateNavParams($(this));
	})

	$('input, textarea').not('.linkParams, #bizName').on('keyup', function () {
		this.value = this.value.replace("'", "");
		this.value = this.value.replace("|", "");
		this.value = this.value.replace(",", "");
	});

	$('input, textarea').on("keyup", function() {
		updateNavOptions($(this));
	})

})// END OF DOCUMENT READY


function remove(obj) {
	$(obj).parent().remove();
}

function updateNavParams(obj) {
	id = obj.data('id');
	if ($('#type'+id).val() == 'webpage') {
		$('#parameters'+id).attr('placeholder', '');
		$('#parameters'+id).val('&wPageId=');
	}
	else if ($('#type'+id).val() == 'external') {
		$('#parameters'+id).val('');
		$('#parameters'+id).attr('placeholder', 'Paste in external link');
	}
	else {
		$('#parameters'+id).val('');
		$('#parameters'+id).attr('placeholder', '');
	}
	updateNavOptions(obj);
}

function updateNavOptions(obj) {
	id = obj.data('id');

	title = $('#title'+id).val();
	type = $('#type'+id).val();
	target = $('#target'+id).val();
	parameters = $('#parameters'+id).val();
  pageTitle = $('#pageTitle'+id).val();
	metaDescription = $('#metaDescription'+id).val();

	$('#hidden'+id).val(
		title + '|' +
		type + '|' +
		target + '|' +
		parameters + '|' +
		pageTitle + '|' +
		metaDescription
		);

	console.log($('#hidden'+id).val());

}
