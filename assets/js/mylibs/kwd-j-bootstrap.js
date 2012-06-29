/* =====================================================================
 * Template:	kwd-j-bootstrap :: for Joomla! 2.5
 * File:		kwd-j-bootstrap.js
 * Author: 		Chris Jones-Gill - KISS Web Design
 * Version: 	0.1
 * Created: 	March 2012
 * Copyright:	KISS Web Design - (C) 2012 - All rights reserved
 * License:		Apache Version 2.0 - http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Purpose:		Various bits of js for the template
/* ===================================================================== */

$.noConflict();

// collapse, accordion style, each active content row when viewed on small screens
// requires bootstrap-collapse.js and bootstrap-transition.js loaded before this file
// just do row 2 for now for testing/demo purposes

function row2Switch(width) {
var row2 = jQuery('#collapserow2');
var row2heading = jQuery('#row2_collapse_text');

row2.addClass('in');  

width = jQuery(window).width();
if (width < 768){
	row2.removeClass('in');
	row2heading.addClass('heading_show');
	}

row2.collapse({
    toggle: false
    })

$('#collapserow2').on('shown', function () {
		row2heading.removeClass('heading_show');
		row2heading.addClass('heading_hide');		
    })
$('#collapserow2').on('hidden', function () {
		row2heading.addClass('heading_show');
		row2heading.removeClass('heading_hide');
    })
}
row2Switch();
