
jQuery( document ).ready(function($) {

	adjustOverlayHeight();
	adjustGestDetails();

	$( window ).resize(function() {
		adjustOverlayHeight();
	});

	/** GMaps Integration **/
	$('.map-canvas').each(function (index) {

		var map = new GMaps({
			div: $(this).attr('id'),
			lat: $(this).data('latitude'),
			lng: $(this).data('longitude')
		});

		map.addMarker({
			lat: $(this).data('latitude'),
			lng: $(this).data('longitude'),
			title: $(this).data('markertitle'),
			infoWindow: {
				content: '<p>' + $(this).data('infotitle') + '</p>'
			}
		});
	});

	$( "#person-count" ).change(function() {
		adjustGestDetails();
	});

	$("#guest-name").change(function() {
		$('#guest-name-0').val($('#guest-name').val());
	});
});


function adjustOverlayHeight() {
	var windowHeight = $(window).height();
	var minOverlayHeight = windowHeight - 40;

	if(minOverlayHeight > $('.content-background').height()) {
		$('.content-background').height(minOverlayHeight);
	}
}

function adjustGestDetails() {
	var guestCount = parseInt($( "#person-count" ).val());

	if(guestCount == 0) {
		guestCount = 2;
	}


	$('.guest-detail').each(function( index ) {
		if(index < guestCount) {
			$(this).show(100);
		} else {
			$(this).hide(100);
		}
	});
}