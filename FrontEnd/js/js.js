$(function() {
	// Define images
	var imgs = {
		'load': $('<img src="images/loading.gif" />'),
		'saved': $('<img src="images/saved.png" />')
	};
	
	$(document).ready(function () {
		// Button event handler
		var button = $('.editable_box button');
		$(button).click(function (e) {
			e.preventDefault();
			submit_handler(this);
		});
		
		// Select event handler
		var select = $('.editable_box select');
		$(select).change(function (e) {
			e.preventDefault();
			submit_handler(this);
		});
	});
	
	// Submit Handler
	function submit_handler (trigger_element) {
		// Define Elements
		var editable = $(trigger_element).closest('.editable');
		var submit_elements = $('input, select', editable);
		
		// Build JSON
		var json = {};
		$.each(submit_elements, function (index) {
			var name = $(this).attr('name');
			if (typeof name !== typeof undefined && name !== false) {
				json[name] = $(this).val();
			}
		});
		
		var json_serialized = JSON.stringify(json);
		
		// Loader & Success Images
		var img = $('img', editable);
		if ($(img).length > 0) {
			$(img).remove();
		}
		$(imgs.load).appendTo($(editable));
		setTimeout(function () {
			$('img', editable).remove();
			$(imgs.saved).appendTo($(editable));
			setTimeout(function () {
				$('img', editable).remove();
			}, 2000);
		}, 1500);
		
		// Save Data
		$.ajax({
			type:'GET',
			dataType: 'json',
			url: 'insert.php',
			data: {
				json: json_serialized
			},
			success: function(data) {
				if (!data.status) {
					alert(data.message);
				}
			}
		});
	}
});