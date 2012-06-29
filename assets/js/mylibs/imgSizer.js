/* =====================================================================
 * Template:	kwd-j-bootstrap :: for Joomla! 2.5
 * File:		imgSizer.js
 * Based on:	http://unstoppablerobotninja.com/entry/fluid-images/
 * 				This is in the public domain, and has no licence.
 * Author: 		Chris Jones-Gill - KISS Web Design
 * Version: 	0.1
 * Created: 	March 2012
 * Copyright:	KISS Web Design - (C) 2012 - All rights reserved
 * License:		Creative Commons Attribution-ShareAlike 3.0 Unported License.
 *              http://creativecommons.org/licenses/by-sa/3.0/
/* ===================================================================== */
// Added 2 var's to enable the loading of the 10x10px transparent spacer.gif
// by getting the path location of this script and appending the location of
// the spacer.gif image.
// This is so that it will work on any Joomla! template based on this starter template.
var scriptpath = $("script").last().attr("src").split('?')[0].split('/').slice(0, -1).join('/')+'/';
var spacerLocation = scriptpath + "../../img/spacer.gif";
var imgSizer = {
	Config : {
		imgCache : []
	}

	,collate : function(aScope) {
		var isOldIE = (document.all && !window.opera && !window.XDomainRequest) ? 1 : 0;
		if (isOldIE && document.getElementsByTagName) {
			var c = imgSizer;
			var imgCache = c.Config.imgCache;

			var images = (aScope && aScope.length) ? aScope : document.getElementsByTagName("img");
			for (var i = 0; i < images.length; i++) {
				images[i].origWidth = images[i].offsetWidth;
				images[i].origHeight = images[i].offsetHeight;

				imgCache.push(images[i]);
				c.ieAlpha(images[i]);
				// Images below 128px are most likely icons, like the print and email icons in Joomla!
				// Scaling them looks very wrong, so lets not do it.
				if (images[i].origWidth > 128) {
					images[i].style.width = "100%";
				} else {
					images[i].style.width = images[i].origWidth + "px";
				}
			}

			if (imgCache.length) {
				c.resize(function() {
					for (var i = 0; i < imgCache.length; i++) {
						// Images below 128px are most likely icons, like the print and email icons in Joomla!
						// Scaling them looks very wrong, so lets not do it.						
						if (imgCache[i].origWidth > 128) {
							var ratio = (imgCache[i].offsetWidth / imgCache[i].origWidth);
							imgCache[i].style.height = (imgCache[i].origHeight * ratio) + "px";
						} else {
							imgCache[i].style.height = imgCache[i].origHeight + "px";
						}
					}
				});
			}
		}
	}

	,ieAlpha : function(img) {
		var c = imgSizer;
		if (img.oldSrc) {
			img.src = img.oldSrc;
		}
		var src = img.src;
		img.style.width = img.offsetWidth + "px";
		img.style.height = img.offsetHeight + "px";
		img.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + src + "', sizingMethod='scale')"
		img.oldSrc = src;
		img.src = spacerLocation;
	}

	// Ghettomodified version of Simon Willison's addLoadEvent() -- http://simonwillison.net/2004/May/26/addLoadEvent/
	,resize : function(func) {
		var oldonresize = window.onresize;
		if (typeof window.onresize != 'function') {
			window.onresize = func;
		} else {
			window.onresize = function() {
				if (oldonresize) {
					oldonresize();
				}
				func();
			}
		}
	}
}