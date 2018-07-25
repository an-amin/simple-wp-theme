/*
 * Simple WP Theme
 */
 
(function($) {
	$(document).ready(function($) {
	    $('a').tooltip();

	    $('#go_top a').click(function(e){
	    	e.preventDefault();
	    	window.scrollTo(0, 0);
	    });


	});
})( jQuery );