/* =====================================================================
 * Template:	kwd-j-bootstrap :: for Joomla! 2.5
 * File:		kwd-j-bootstrap.js
 * Author: 		Chris Jones-Gill - KISS Web Design
 * Version: 	0.0.3
 * Created: 	March 2012
 * Copyright:	KISS Web Design - (C) 2012 - All rights reserved
 * License:		Apache Version 2.0 - http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Purpose:		Various bits of js for the template
/* ===================================================================== */

$.noConflict();
!function ($) {
// collapse, accordion style, each active content row when viewed on small screens
// requires bootstrap-collapse.js and bootstrap-transition.js loaded before this file

function rowSwitch(width, rownum) {

var row = jQuery('#collapserow'+rownum);
var rowheading = jQuery('#row'+rownum+'_collapse_text');

width = jQuery(window).width();
if (width < 768){
	row.removeClass('in');
	rowheading.addClass('heading_show');
	}

row.collapse({
    toggle: false
    })

$('#collapserow'+rownum).on('shown', function () {
		rowheading.removeClass('heading_show');
		rowheading.addClass('heading_hide');		
    })
$('#collapserow'+rownum).on('hidden', function () {
		rowheading.addClass('heading_show');
		rowheading.removeClass('heading_hide');
    })
}
rowSwitch(0,2);
rowSwitch(0,4);
rowSwitch(0,6);
rowSwitch(0,7);
rowSwitch(0,10);
rowSwitch(0,11);
rowSwitch(0,12);
rowSwitch(0,13);

}(window.jQuery)