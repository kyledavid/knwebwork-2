"use strict";
( function( $ ) {
	$('.submit').click(function() {
		ga('send', 'event', 'Form', 'submitted', 'Summer Campaign');
	});
})( jQuery );