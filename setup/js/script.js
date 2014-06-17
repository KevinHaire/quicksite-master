$(document).ready(function() {

	var i = $('.navItem').length;
	$('.newNav').click(function(){
		newNavItem = 	'<li class="navItem nav_'+i+'">'+
										'<div class="exit"></div>'+
										'<label for="">Title:</label>'+
										'<input id="title'+i+'" data-id="'+i+'" type="text" />'+
										// '<label for="">Position:</label>'+
										// '<input id="position'+i+'" data-id="'+i+'" type="number" name="" />'+
										'<label for="">Type:</label>'+
										'<select id="type'+i+'" data-id="'+i+'" type="select" name="">'+
											'<option value="webpage">Webpage</option>'+
											'<option value="marketplace">Marketplace</option>'+
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
	title = $('#title'+id).val();
	position = $('#position'+id).val();
	type = $('#type'+id).val();
	parameters = $('#parameters'+id).val();

	$('#hidden'+id).val(
		title + '|' +
		position + '|' +
		type + '|' +
		parameters
		);

	console.log($('#hidden'+id).val());

}