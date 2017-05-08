( function( $ ) {

	$('.menu-item').hover(
		function() {
			$( this ).find('.nav-underline').toggleClass('active');
		});

	$('#hero-cta').mouseenter(
		function() {
			$( this ).css("background-color", '#eb625f');
		});

	$('#hero-cta').mouseleave(
		function() {
			console.log('yayarst');
			$( this ).css("background-color", 'transparent');
		});

})( jQuery );