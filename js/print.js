"use strict";

( function( $ ) {
	$('.print-button').click(function(e) {
		e.preventDefault();
		window.print();
	});
} )( jQuery );