( function( $ ) {
	$('.menu-item').hover(
		function() {
			$( this ).find('.nav-underline').toggleClass('active');
		});
})( jQuery );