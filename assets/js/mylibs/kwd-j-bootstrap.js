/* =====================================================================
 * Template:	kwd-j-bootstrap :: for Joomla! 2.5
 * File:		kwd-j-bootstrap.js
 * Author: 		Chris Jones-Gill - KISS Web Design
 * Version: 	0.0.2
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
// just do row 2 for now for testing/demo purposes

function row2Switch(width) {
var row2 = jQuery('#collapserow2');
var row2heading = jQuery('#row2_collapse_text');

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

function row4Switch(width) {
var row4 = jQuery('#collapserow4');
var row4heading = jQuery('#row4_collapse_text');

width = jQuery(window).width();
if (width < 768){
	row4.removeClass('in');
	row4heading.addClass('heading_show');
	}

row4.collapse({
    toggle: false
    })

$('#collapserow4').on('shown', function () {
		row4heading.removeClass('heading_show');
		row4heading.addClass('heading_hide');		
    })
$('#collapserow4').on('hidden', function () {
		row4heading.addClass('heading_show');
		row4heading.removeClass('heading_hide');
    })
}

function row6Switch(width) {
var row6 = jQuery('#collapserow6');
var row6heading = jQuery('#row6_collapse_text');

width = jQuery(window).width();
if (width < 768){
	row6.removeClass('in');
	row6heading.addClass('heading_show');
	}

row6.collapse({
    toggle: false
    })

$('#collapserow6').on('shown', function () {
		row6heading.removeClass('heading_show');
		row6heading.addClass('heading_hide');		
    })
$('#collapserow6').on('hidden', function () {
		row6heading.addClass('heading_show');
		row6heading.removeClass('heading_hide');
    })
}

function row7Switch(width) {
var row7 = jQuery('#collapserow7');
var row7heading = jQuery('#row7_collapse_text');

width = jQuery(window).width();
if (width < 768){
	row7.removeClass('in');
	row7heading.addClass('heading_show');
	}

row7.collapse({
    toggle: false
    })

$('#collapserow7').on('shown', function () {
		row7heading.removeClass('heading_show');
		row7heading.addClass('heading_hide');		
    })
$('#collapserow7').on('hidden', function () {
		row7heading.addClass('heading_show');
		row7heading.removeClass('heading_hide');
    })
}

function row10Switch(width) {
var row10 = jQuery('#collapserow10');
var row10heading = jQuery('#row10_collapse_text');

width = jQuery(window).width();
if (width < 768){
	row10.removeClass('in');
	row10heading.addClass('heading_show');
	}

row10.collapse({
    toggle: false
    })

$('#collapserow10').on('shown', function () {
		row10heading.removeClass('heading_show');
		row10heading.addClass('heading_hide');		
    })
$('#collapserow10').on('hidden', function () {
		row10heading.addClass('heading_show');
		row10heading.removeClass('heading_hide');
    })
}

function row11Switch(width) {
var row11 = jQuery('#collapserow11');
var row11heading = jQuery('#row11_collapse_text');

width = jQuery(window).width();
if (width < 768){
	row11.removeClass('in');
	row11heading.addClass('heading_show');
	}

row11.collapse({
    toggle: false
    })

$('#collapserow11').on('shown', function () {
		row11heading.removeClass('heading_show');
		row11heading.addClass('heading_hide');		
    })
$('#collapserow11').on('hidden', function () {
		row11heading.addClass('heading_show');
		row11heading.removeClass('heading_hide');
    })
}

function row12Switch(width) {
var row12 = jQuery('#collapserow12');
var row12heading = jQuery('#row12_collapse_text');

width = jQuery(window).width();
if (width < 768){
	row12.removeClass('in');
	row12heading.addClass('heading_show');
	}

row12.collapse({
    toggle: false
    })

$('#collapserow12').on('shown', function () {
		row12heading.removeClass('heading_show');
		row12heading.addClass('heading_hide');		
    })
$('#collapserow12').on('hidden', function () {
		row12heading.addClass('heading_show');
		row12heading.removeClass('heading_hide');
    })
}

function row13Switch(width) {
var row13 = jQuery('#collapserow13');
var row13heading = jQuery('#row13_collapse_text');

width = jQuery(window).width();
if (width < 768){
	row13.removeClass('in');
	row13heading.addClass('heading_show');
	}

row13.collapse({
    toggle: false
    })

$('#collapserow13').on('shown', function () {
		row13heading.removeClass('heading_show');
		row13heading.addClass('heading_hide');		
    })
$('#collapserow13').on('hidden', function () {
		row13heading.addClass('heading_show');
		row13heading.removeClass('heading_hide');
    })
}

row2Switch();
row4Switch();
row6Switch();
row7Switch();
row10Switch();
row11Switch();
row12Switch();
row13Switch();


}(window.jQuery)