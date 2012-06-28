<?php defined('_JEXEC') or die;
/* =====================================================================
 * Template:		kwd-j-bootstrap :: for Joomla! 2.5
 * Author: 			Chris Jones-Gill - KISS Web Design
 * Version: 		0.3
 * Created: 		June 2012
 * This Version:	June 2012
 * Copyright:		KISS Web Design - (C) 2012 - All rights reserved
 * License:			Apache Version 2.0 http://www.apache.org/licenses/LICENSE-2.0
/* ===================================================================== */

// Load template logic
include_once (dirname(__FILE__).DS.'functions/logic.php');  
?>
<!doctype html>
<head>
<jdoc:include type="head" />

<?php // Now do the IE specific stuff ?>

	<?php // Le HTML5 shim, for IE6-8 support of HTML5 elements ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php // Media query, for IE6-8 support of min/max width media queries ?>
	<!--[if lt IE 9]>
		<script>
  			document.write('<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/libs/respond.min.js"></s'+'cript>');
  		</script>      
    <![endif]-->
	<!--[if (gte IE 6)&(lte IE 8)]>
		<script type="text/javascript" src="/assets/js/libs/selectivizr-min.js"></script>
	<![endif]-->
	<?php // Responsive images, for IE7-8 support of dynamic image resizing - doesn't work in IE6 ?>
	<!--[if (lt IE 9) & (gt IE 6) & (!IEMobile)]>
	<script>
		addLoadEvent(function() {
			imgSizer.collate();
		});

		function addLoadEvent(func) {
			var oldonload = window.onload;
			if (typeof window.onload != 'function') {
				window.onload = func;
			} else {
				window.onload = function() {
					if (oldonload) {
						oldonload();
					}
					func();
				}
			}
		}
	</script>
	<![endif]-->
<?php
// End of the IE specific stuff
?>

    <?php // Le fav and touch icons ?>
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body class="<?php echo htmlspecialchars($bodyFontFamily); ?>"data-spy="scroll" data-target=".subnav" data-offset="50">

<noscript>JavaScript is unavailable or disabled. This site will still function, but some useful features will not work.</noscript>
<?php // Now do the layout - copied from bootstrap ?>

<?php // Position nav-top ?>
<?php if ($navTop > 0) { ?>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
	        	<button type="button"class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="<?php echo $this->baseurl ?>/"><?php echo htmlspecialchars($app->getCfg('sitename'));?></a>
				<nav id="nav-top" role="navigation" class="nav-collapse collapse">
					<jdoc:include type="modules" name="nav-top" style="html5" />
				</nav>
			</div>
		</div>
	</div>
<?php } ?>

<?php // container for page contents ?>
<div class="container">

<?php // Position nav-r1 ?>
<?php if ($navR1 > 0) { ?>
	<nav id="nav-r1" role="navigation" class="subnav">
		<jdoc:include type="modules" name="nav-r1" style="html5" />
	</nav>
<?php } ?>

<?php // Row 2 positions ?>
<?php if ($row2Active > 0) { ?>
	<header id="header-row" class="jumbotron masthead">
		<?php // Position section-r2-1 - use as logo or header ?>
		<?php if ($sectionR2a > 0) { ?>
			<header id="section-r2-1">
			    <div class="span<?php echo htmlspecialchars($logoCols); ?>">
					<jdoc:include type="modules" name="section-r2-1" style="html5" />
			    </div>
			</header>
		<?php } ?>
	
		<?php // Position section-r2-2 - use as tagline (related to logo/header) ?>
		<?php if ($sectionR2b > 0) { ?>
			<aside id="section-r2-2">
			    <div class="span<?php echo htmlspecialchars($taglineCols); ?>">
					<jdoc:include type="modules" name="section-r2-2" style="html5" />
			    </div>
			</saide>
		<?php } ?>
	
		<?php // Position section-r2-3 - use as search position ?>
		<?php if ($sectionR2c > 0) { ?>
			<section id="section-r2-2">
			    <div class="span<?php echo htmlspecialchars($searchCols); ?>">
					<jdoc:include type="modules" name="section-r2-3" style="html5" />
			    </div>
			</section>
		<?php } ?>
	
		<?php // Position section-r2-4 - no specified role ?>
		<?php if ($sectionR2d > 0) { ?>
			<section id="section-r2-4">
			    <div class="span<?php echo htmlspecialchars($sectionColsR2d); ?>">
					<jdoc:include type="modules" name="section-r2-4" style="html5" />
			    </div>
			</section>
		<?php } ?>
	</header>
<?php } ?>

<?php // Position nav-r3 ?>
<?php if ($navR3 > 0) { ?>
	<nav id="nav-r3" role="navigation" class="subnav">
		<jdoc:include type="modules" name="nav-r3" style="html5" />
	</nav>
<?php } ?>

<?php // Position section-r4 ?>
<?php if ($sectionR4 > 0) { ?>
	<section id="section-r4">
	    <div class="span<?php echo htmlspecialchars($sectionColsR4); ?>">
			<jdoc:include type="modules" name="section-r4" style="html5" />
	    </div>
	</section>
<?php } ?>

<?php // Position nav-r5 ?>
<?php if ($navR5 > 0) { ?>
	<nav id="nav-r5" role="navigation" class="subnav">
		<jdoc:include type="modules" name="nav-r5" style="html5" />
	</nav>
<?php } ?>

<?php // Row 6 positions ?>
<?php if ($row6Active > 0) { ?>

	<?php // Position section-r6-1 ?>
	<?php if ($sectionR6a > 0) { ?>
		<section id="section-r6-1">
		    <div class="span<?php echo htmlspecialchars($sectionColsR6a); ?>">
				<jdoc:include type="modules" name="section-r6-1" style="html5" />
		    </div>
		</section>
	<?php } ?>

	<?php // Position section-r6-2 ?>
	<?php if ($sectionR6b > 0) { ?>
		<section id="section-r6-2">
		    <div class="span<?php echo htmlspecialchars($sectionColsR6b); ?>">
				<jdoc:include type="modules" name="section-r6-2" style="html5" />
		    </div>
		</section>
	<?php } ?>

	<?php // Position section-r6-3 ?>
	<?php if ($sectionR6c > 0) { ?>
		<section id="section-r6-3">
		    <div class="span<?php echo htmlspecialchars($sectionColsR6c); ?>">
				<jdoc:include type="modules" name="section-r6-3" style="html5" />
		    </div>
		</section>
	<?php } ?>

	<?php // Position section-r6-4 ?>
	<?php if ($sectionR6d > 0) { ?>
		<section id="section-r6-4">
		    <div class="span<?php echo htmlspecialchars($sectionColsR6d); ?>">
				<jdoc:include type="modules" name="section-r6-4" style="html5" />
		    </div>
		</section>
	<?php } ?>

<?php } ?>

<?php // Row 7 positions ?>
<?php if ($row7Active > 0) { ?>

	<?php // Position section-r7-1 ?>
	<?php if ($sectionR7a > 0) { ?>
		<section id="section-r7-1">
		    <div class="span<?php echo htmlspecialchars($sectionColsR7a); ?>">
				<jdoc:include type="modules" name="section-r7-1" style="html5" />
		    </div>
		</section>
	<?php } ?>

	<?php // Position section-r7-2 ?>
	<?php if ($sectionR7b > 0) { ?>
		<section id="section-r7-2">
		    <div class="span<?php echo htmlspecialchars($sectionColsR7b); ?>">
				<jdoc:include type="modules" name="section-r7-2" style="html5" />
		    </div>
		</section>
	<?php } ?>

	<?php // Position section-r7-3 ?>
	<?php if ($sectionR7c > 0) { ?>
		<section id="section-r7-3">
		    <div class="span<?php echo htmlspecialchars($sectionColsR7c); ?>">
				<jdoc:include type="modules" name="section-r7-3" style="html5" />
		    </div>
		</section>
	<?php } ?>

	<?php // Position section-r7-4 ?>
	<?php if ($sectionR7d > 0) { ?>
		<section id="section-r7-4">
		    <div class="span<?php echo htmlspecialchars($sectionColsR7d); ?>">
				<jdoc:include type="modules" name="section-r7-4" style="html5" />
		    </div>
		</section>
	<?php } ?>

<?php } ?>

<?php // Position nav-r8 ?>
<?php if ($navR8 > 0) { ?>
	<nav id="nav-r8" role="navigation" class="subnav">
		<jdoc:include type="modules" name="nav-r8" style="html5" />
	</nav>
<?php } ?>

<?php // Main content from Joomla ?>
<section id="mainRow">                               
	<?php // Position section-main-left ?>
	<?php if ($sectionMainLeft > 0) { ?>
		<aside id="section-main-left" class="span<?php echo htmlspecialchars($mainLeftCols); ?>" role="complementary">
			<jdoc:include type="modules" name="section-main-left" style="html5" />
		</aside>
	<?php } ?>

	<?php // Position section-main ?>
	<div id="section-main" role="main" class="span<?php echo htmlspecialchars($mainContentCols); ?>">
		<jdoc:include type="message" />
		<jdoc:include type="component" />
	</div>

	<?php // Position section-main-right ?>
	<?php if ($sectionMainRight > 0) { ?>
		<aside id="section-main-right" class="span<?php echo htmlspecialchars($mainRightCols); ?>" role="complementary">
			<jdoc:include type="modules" name="section-main-right" style="html5" />
		</aside>
	<?php } ?>
</section>


<?php // Row 10 positions ?>
<?php if ($row10Active > 0) { ?>

	<?php // Position section-r10-1 ?>
	<?php if ($sectionR10a > 0) { ?>
		<section id="section-r10-1">
		    <div class="span<?php echo htmlspecialchars($sectionColsR10a); ?>">
				<jdoc:include type="modules" name="section-r10-1" style="html5" />
		    </div>
		</section>
	<?php } ?>

	<?php // Position section-r10-2 ?>
	<?php if ($sectionR10b > 0) { ?>
		<section id="section-r10-2">
		    <div class="span<?php echo htmlspecialchars($sectionColsR10b); ?>">
				<jdoc:include type="modules" name="section-r10-2" style="html5" />
		    </div>
		</section>
	<?php } ?>

	<?php // Position section-r10-3 ?>
	<?php if ($sectionR10c > 0) { ?>
		<section id="section-r10-3">
		    <div class="span<?php echo htmlspecialchars($sectionColsR10c); ?>">
				<jdoc:include type="modules" name="section-r10-3" style="html5" />
		    </div>
		</section>
	<?php } ?>

	<?php // Position section-r10-4 ?>
	<?php if ($sectionR10d > 0) { ?>
		<section id="section-r10-4">
		    <div class="span<?php echo htmlspecialchars($sectionColsR10d); ?>">
				<jdoc:include type="modules" name="section-r10-4" style="html5" />
		    </div>
		</section>
	<?php } ?>

<?php } ?>

<?php // Row 11 positions ?>
<?php if ($row11Active > 0) { ?>

	<?php // Position section-r11-1 ?>
	<?php if ($sectionR11a > 0) { ?>
		<section id="section-r11-1">
		    <div class="span<?php echo htmlspecialchars($sectionColsR11a); ?>">
				<jdoc:include type="modules" name="section-r11-1" style="html5" />
		    </div>
		</section>
	<?php } ?>

	<?php // Position section-r11-2 ?>
	<?php if ($sectionR11b > 0) { ?>
		<section id="section-r11-2">
		    <div class="span<?php echo htmlspecialchars($sectionColsR11b); ?>">
				<jdoc:include type="modules" name="section-r11-2" style="html5" />
		    </div>
		</section>
	<?php } ?>

	<?php // Position section-r11-3 ?>
	<?php if ($sectionR11c > 0) { ?>
		<section id="section-r11-3">
		    <div class="span<?php echo htmlspecialchars($sectionColsR11c); ?>">
				<jdoc:include type="modules" name="section-r11-3" style="html5" />
		    </div>
		</section>
	<?php } ?>

	<?php // Position section-r11-4 ?>
	<?php if ($sectionR11d > 0) { ?>
		<section id="section-r11-4">
		    <div class="span<?php echo htmlspecialchars($sectionColsR11d); ?>">
				<jdoc:include type="modules" name="section-r11-4" style="html5" />
		    </div>
		</section>
	<?php } ?>

<?php } ?>

<?php // Position section-r12 ?>
<?php if ($sectionR12 > 0) { ?>
	<section id="section-r12">
	    <div class="span<?php echo htmlspecialchars($sectionColsR12); ?>">
			<jdoc:include type="modules" name="section-r12" style="html5" />
	    </div>
	</section>
<?php } ?>


<?php // Row 13 positions ?>
<?php if ($row13Active > 0) { ?>
	<footer role="contentinfo" class="footer">
		<?php // Position section-r13-1 ?>
		<?php if ($sectionR13a > 0) { ?>
			<section id="section-r13-1">
			    <div class="span<?php echo htmlspecialchars($sectionColsR13a); ?>">
					<jdoc:include type="modules" name="section-r13-1" style="html5" />
			    </div>
			</section>
		<?php } ?>

		<?php // Position section-r13-2 ?>
		<?php if ($sectionR13b > 0) { ?>
			<section id="section-r13-2">
			    <div class="span<?php echo htmlspecialchars($sectionColsR13b); ?>">
					<jdoc:include type="modules" name="section-r13-2" style="html5" />
			    </div>
			</section>
		<?php } ?>
	
		<?php // Position section-r13-3 ?>
		<?php if ($sectionR13c > 0) { ?>
			<section id="section-r13-3">
			    <div class="span<?php echo htmlspecialchars($sectionColsR13c); ?>">
					<jdoc:include type="modules" name="section-r13-3" style="html5" />
			    </div>
			</section>
		<?php } ?>
	
		<?php // Position section-r13-4 ?>
		<?php if ($sectionR13d > 0) { ?>
			<section id="section-r13-4">
			    <div class="span<?php echo htmlspecialchars($sectionColsR13d); ?>">
					<jdoc:include type="modules" name="section-r13-4" style="html5" />
			    </div>
			</section>
		<?php } ?>
	</footer>
<?php } ?>


<?php // Position nav-r14 ?>
<?php if ($navR14 > 0) { ?>
	<nav id="nav-r14" role="navigation" class="subnav">
		<jdoc:include type="modules" name="nav-r14" style="html5" />
	</nav>
<?php } ?>


<?php // Position nav-bottom ?>
<?php if ($navBottom > 0) { ?>
	<div class="navbar navbar-fixed-bottom">
		<div class="navbar-inner">
			<div class="container">
	        	<button type="button"class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a id="credit" class="brand" href="http://kisswebdesign.co.uk" title="KISS Web Design">KISS Web Design</a>
				<nav id="nav-bottom" role="navigation" class="nav-collapse collapse">
					<jdoc:include type="modules" name="nav-bottom" style="html5" />
				</nav>
			</div>
		</div>
	</div>
<?php } 
else { ?>
	<footer id="credit" class="footer">
		<p class="pull-right">
			<a href="http://kisswebdesign.co.uk" title="KISS Web Design">KISS Web Design</a>
		</p>
	</footer>
<?php } ?>

<jdoc:include type="modules" name="debug"/>

</div> <?php // container ?>

<?php // Scripts ?>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/mylibs/plugins.js"></script>
    <?php // Le javascript
    ================================================== ?>
    <?php // Placed at the end of the document so the pages load faster ?>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/jquery.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/google-code-prettify/prettify.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-button.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/bootstrap-typeahead.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/application.js"></script>

	<?php // Responsive images, for IE7-8 support of dynamic image resizing - doesn't work in IE6 ?>
	<!--[if (lt IE 9) & (gt IE 6) & (!IEMobile)]>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/mylibs/imgSizer.js"></script>
	<![endif]-->

<noscript>JavaScript is unavailable or disabled. This site will still function, but some useful features will not work.</noscript>
</body>
</html>