
jQuery( document ).ready(function($) {

	adjustOverlayHeight();

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
});


function adjustOverlayHeight() {
	var windowHeight = $(window).height();
	var minOverlayHeight = windowHeight - 40;

	console.log('Content was to ' + $('.content-background').height() + ' monOverlay: ' + minOverlayHeight);

	if(minOverlayHeight > $('.content-background').height()) {
		$('.content-background').height(minOverlayHeight);
	}

	console.log('Resized to ' + $('.content-background').height());
}