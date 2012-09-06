/* =====================================================================
 * Template:	kwd-j-bootstrap :: for Joomla! 2.5
 * File:		kwd-j-bootstrap.js
 * Author: 		Chris Jones-Gill - KISS Web Design
 * Version: 	0.0.4
 * Created: 	March 2012
 * Copyright:	KISS Web Design - (C) 2012 - All rights reserved
 * License:		Apache Version 2.0 - http://www.apache.org/licenses/LICENSE-2.0
 * 				Except where indicated otherwise
 * Purpose:		Various bits of js for the template
 * ===================================================================== */

$.noConflict();
(function kwdjb($) {
    "use strict";

/* =====================================================================
 * debouncedresize: special jQuery event that happens once after a window resize
 *
 * latest version and complete README available on Github:
 * https://github.com/louisremi/jquery-smartresize
 *
 * Copyright 2012 @louis_remi
 * Licensed under the MIT license.
 *
 * This saved you an hour of work?
 * Send me music http://www.amazon.co.uk/wishlist/HNTU0468LQON
 * ===================================================================== */
(function($) {

	var 	$event = $.event,
		$special,
		resizeTimeout;

	$special = $event.special.debouncedresize = {
		setup: function() {
		$( this ).on( "resize", $special.handler );
		},
		teardown: function() {
			$( this ).off( "resize", $special.handler );
			},
		handler: function( event, execAsap ) {
			// Save the context
			var context = this,
			args = arguments,
			dispatch = function() {
				// set correct event type
				event.type = "debouncedresize";
			$event.dispatch.apply( context, args );
			};
	
			if ( resizeTimeout ) {
				clearTimeout( resizeTimeout );
			}

			execAsap ?
			dispatch() :
			resizeTimeout = setTimeout( dispatch, $special.threshold );
		},
		threshold: 250
	};

})(jQuery);

/* =====================================================================
 * ensures that the stuff hidden when viewed in a small window
 * returns to visible when the screen size reaches the desired size
 * ===================================================================== */
$(window).on("debouncedresize", function(event) {
        var width = jQuery(window).width(),
	rownums = new Array(3, 4, 6, 7, 10, 11, 12, 13);
        if (width > 980) {
		jQuery.each(rownums, function() {  
			if(!jQuery('#collapserow' + this).hasClass('in')) {
				jQuery('#collapserow' + this).collapse('show');
			}
		});            
        }
});



// collapse, accordion style, each active content row when viewed on small screens
// requires bootstrap-collapse.js and bootstrap-transition.js loaded before this file

    function rowSwitch(width, rownum) {

        var row = jQuery('#collapserow' + rownum),
            rowheading = jQuery('#row' + rownum + '_collapse_text');

        width = jQuery(window).width();
        if (width < 980) {
            row.removeClass('in');
            rowheading.addClass('heading_show');
        }
        
        
        row.collapse({
            toggle: false
        });

        $('#collapserow' + rownum).on('shown', function () {
            rowheading.removeClass('heading_show');
            rowheading.addClass('heading_hide');
        });
        $('#collapserow' + rownum).on('hidden', function () {
            rowheading.addClass('heading_show');
            rowheading.removeClass('heading_hide');
        });
    }
    //rowSwitch(0, 2);
    rowSwitch(0, 3);
    rowSwitch(0, 4);
    rowSwitch(0, 6);
    rowSwitch(0, 7);
    rowSwitch(0, 10);
    rowSwitch(0, 11);
    rowSwitch(0, 12);
    rowSwitch(0, 13);


/* =====================================================================
 * displays the contents of the #scrollUp element and scrolls to the 
 * top of the page if it is clicked on / touched
 * ===================================================================== */
     jQuery(function() {
	jQuery(window).scroll(function() {
		if(jQuery(this).scrollTop() == 0) {
			jQuery('#scrollUp').fadeOut();
		} else {
			jQuery('#scrollUp').fadeIn();
		}
	});
	jQuery('#scrollUp').click(function() {
		jQuery('body,html').animate({scrollTop:0},700);
	});
   }); 

}(window.jQuery));
