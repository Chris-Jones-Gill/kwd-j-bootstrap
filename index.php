<?php defined('_JEXEC') or die;
/* =====================================================================
 * Template:		kwd-j-bootstrap :: for Joomla! 2.5
 * Author: 			Chris Jones-Gill - KISS Web Design
 * Version: 		0.1
 * Created: 		June 2012
 * This Version:	June 2012
 * Copyright:		KISS Web Design - (C) 2012 - All rights reserved
 * License:	Apache Version 2.0 http://www.apache.org/licenses/LICENSE-2.0
/* ===================================================================== */

// Load template logic
include_once (dirname(__FILE__).DS.'functions/logic.php');  
?>
<!doctype html>
<head>
<jdoc:include type="head" />
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
<?php
// Now do the IE specific stuff
?>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<!-- Media query, for IE6-8 support of min/max width media queries -->
	<!--[if lt IE 9]>
		<script>
  			document.write('<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/libs/respond.min.js"></s'+'cript>');
  		</script>      
    <![endif]-->
	<!--[if (gte IE 6)&(lte IE 8)]>
		<script type="text/javascript" src="/assets/js/libs/selectivizr-min.js"></script>
	<![endif]-->
	<!-- Responsive images, for IE7-8 support of dynamic image resizing - doesn't work in IE6 -->
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

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


</head>
<body class="<?php echo htmlspecialchars($bodyFontFamily); ?> clearfix">
<noscript>JavaScript is unavailable or disabled. This site will still function, but some useful features will not work.</noscript>
<div id="logoRow">
    <div class="container">
         <div class="row clearfix">
         	<a href="<?php echo $this->baseurl ?>/" title="<?php echo htmlspecialchars($app->getCfg('sitename'));?>">
            	<header id="logo" class="<?php echo htmlspecialchars($logoCols); ?>col">
						<img border="0" alt="<?php echo htmlspecialchars($app->getCfg('sitename'));?> Logo" src="<?php echo $this->baseurl ?>/<?php echo $SiteLogo;?>">	
                    <div id="logotext"><?php echo htmlspecialchars($app->getCfg('sitename'));?></div>     
             	</header>
             </a> 
            <?php if ($tagline > 0) {
              	if($debug) { ?>
                    <div id="tagline" class="<?php echo htmlspecialchars($taglineCols); ?>col<?php if ($searchCols == 0) {echo " last";} ?>" style="border : 1px solid black;">
                <?php } else { ?>
                	<div id="tagline" class="<?php echo htmlspecialchars($taglineCols); ?>col<?php if ($searchCols == 0) {echo " last";} ?>">
                <?php } ?>
                        <jdoc:include type="modules" name="tagline" style="html5" />
                    </div>
            <?php } ?>	
            <?php if ($search > 0) {
            	if($debug) { ?>
                    <div role="search" id="search" class="<?php echo htmlspecialchars($searchCols); ?>col last"  style="border : 1px solid black;">
               	<?php } else { ?>
                    <div role="search" id="search" class="<?php echo htmlspecialchars($searchCols); ?>col last">
                <?php } ?>
                      <jdoc:include type="modules" name="search" style="html5" />
                  </div>
            <?php } ?> 
         </div>	
    </div>  
</div>
<?php if ($menu > 0) { ?>
<header id="navRow">
    <div class="container">
        <div class="row clearfix">
            <div id="mobileMenu" class="mobile">
            	Menu
            </div>
                <?php if($debug) { ?>
                    <nav id="menu" role="navigation" class="twelvecol clearfix"  style="border : 1px solid black;">
                <?php } else { ?>
                    <nav id="menu" role="navigation" class="twelvecol clearfix">
                <?php } ?>
                        <jdoc:include type="modules" name="menu" style="html5" />
                    </nav>          
        </div>
    </div>
</header>
<?php } ?>
<?php if ($breadcrumbs > 0) { ?>
<header id="breadcrumbRow">
    <div class="container">
        <div class="row clearfix">
        	<?php if($debug) { ?>      
            	<nav id="breadcrumbs" role="navigation" class="twelvecol clearfix" style="border : 1px solid black;">
            <?php } else { ?>
            	<nav id="breadcrumbs" role="navigation" class="twelvecol clearfix">
            <?php } ?>
                <jdoc:include type="modules" name="breadcrumbs" style="html5" />
            </nav>
        </div>
    </div>
</header>
<?php } ?>
<?php if ($bigtop > 0) { ?>
<header id="BigTopRow">
    <div class="container">
        <div class="row clearfix">
        	<?php if($debug) { ?>      
            	<div id="bigtop" class="twelvecol clearfix" style="border : 1px solid black;"> 
            <?php } else { ?>
            	<div id="bigtop" class="twelvecol clearfix"> 
            <?php } ?>
                <jdoc:include type="modules" name="bigtop" style="html5" />
            </nav>
        </div>
    </div>
</header>
<?php } ?>
<?php if ($bannerModules > 0) { ?>
<header id="bannerRow">
    <div class="container">
         <div class="row clearfix">
            <?php if ($banner1 > 0) { ?>
            	<?php if($debug) { ?>
                	<div role="banner" id="banner1" class="<?php echo htmlspecialchars($banner1Cols); ?>col<?php if ($banner2 == 0) {echo " last";} ?>" style="border : 1px solid black; margin-right: 3.5%">
               	<?php } else { ?>
                	<div role="banner" id="banner1" class="<?php echo htmlspecialchars($banner1Cols); ?>col<?php if ($banner2 == 0) {echo " last";} ?>">
               	<?php } ?>
                    <jdoc:include type="modules" name="banner1" style="html5" />
                </div>
            <?php } ?>
            <?php if ($banner2 > 0) { ?>
            	<?php if($debug) { ?>
                	<div role="banner" id="banner2" class="<?php echo htmlspecialchars($banner2Cols); ?>col last" style="border : 1px solid black;">
                <?php } else { ?>
                	<div role="banner" id="banner2" class="<?php echo htmlspecialchars($banner2Cols); ?>col last">
                <?php } ?>                
                    <jdoc:include type="modules" name="banner2" style="html5" />
                </div>
            <?php } ?>
         </div>	
    </div>  
</header>
<?php } ?>
<?php if ($aboveModules > 0) { ?>
<div id="aboveRow">
      <div class="container">
          <div class="row clearfix">
          	<?php if ($above1 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="above1" class="<?php echo htmlspecialchars($above1Cols); ?>col<?php if (($above2+$above3+$above4) == 0) {echo " last";} ?>" style="border : 1px solid black; <?php if(($above2+$above3+$above4) != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="above1" class="<?php echo htmlspecialchars($above1Cols); ?>col<?php if (($above2+$above3+$above4) == 0) {echo " last";} ?>"> 
                <?php } ?>                
                    	<jdoc:include type="modules" name="above1" style="html5" />
              		</div>
            <?php } ?>
          	<?php if ($above2 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="above2" class="<?php echo htmlspecialchars($above2Cols); ?>col<?php if (($above3+$above4) == 0) {echo " last";} ?>" style="border : 1px solid black; <?php if(($above3+$above4) != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="above2" class="<?php echo htmlspecialchars($above2Cols); ?>col<?php if (($above3+$above4) == 0) {echo " last";} ?>"> 
                <?php } ?>                
                      	<jdoc:include type="modules" name="above2" style="html5" />
              		</div>
            <?php } ?>
            <?php if ($above3 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="above3" class="<?php echo htmlspecialchars($above3Cols); ?>col<?php if ($above4 == 0) {echo " last";} ?>" style="border : 1px solid black; <?php if($above4 != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="above3" class="<?php echo htmlspecialchars($above3Cols); ?>col<?php if ($above4 == 0) {echo " last";} ?>"> 
                <?php } ?>                
                      	<jdoc:include type="modules" name="above3" style="html5" />
              		</div>
            <?php } ?>
            <?php if ($above4 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="above4" class="<?php echo htmlspecialchars($above4Cols); ?>col last" style="border : 1px solid black;"> 
                <?php } else { ?>
            		<div id="above4" class="<?php echo htmlspecialchars($above4Cols); ?>col last"> 
                <?php } ?>                
                      	<jdoc:include type="modules" name="above4" style="html5" />
              		</div>
             <?php } ?>
          </div>	
      </div>
</div>
<?php } ?>
<div id="mainRow">
      <div class="container">
          <div class="row clearfix">                                
            <?php if ($left > 0) : ?>
              	<?php if($debug) { ?>
              		<aside id="left" class="<?php echo htmlspecialchars($leftCols); ?>col clearfix"  style="border : 1px solid black; margin-right: 3.5%;" role="complementary">
                <?php } else { ?>
              		<aside id="left" class="<?php echo htmlspecialchars($leftCols); ?>col clearfix" role="complementary">
                <?php } ?>                
                   		<jdoc:include type="modules" name="left" style="html5" />
              		</aside>
            <?php endif; ?>
           	<?php if($debug) { ?>
           		<div id="main" role="main" class="<?php echo htmlspecialchars($mainCols); ?>col <?php if ($right == 0) echo "last" ; ?> clearfix"  style="border : 1px solid black; <?php if ($right == 1) echo "margin-right : 3.5%;";?>">
            <?php } else { ?>
           		<div id="main" role="main" class="<?php echo htmlspecialchars($mainCols); ?>col <?php if ($right == 0) echo "last" ; ?> clearfix">
            <?php } ?>                
                  	<jdoc:include type="message" />
           			<jdoc:include type="component" />
           		</div>
            <?php if ($right > 0) : ?>
              	<?php if($debug) { ?>
              		<aside id="right" class="<?php echo htmlspecialchars($rightCols); ?>col last clearfix"  style="border : 1px solid black;" role="complementary">
                <?php } else { ?>
              		<aside id="right" class="<?php echo htmlspecialchars($rightCols); ?>col last clearfix" role="complementary">
                <?php } ?>                
                    	<jdoc:include type="modules" name="right" style="html5" />
              		</aside>
            <?php endif; ?>
          </div>	
      </div>                			
</div>
<?php if ($belowModules > 0) { ?>
<div id="belowRow">
	<div class="container">
       	<div class="row clearfix">
			<?php if ($below1 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="below1" class="<?php echo htmlspecialchars($below1Cols); ?>col<?php if (($below2+$below3+$below4) == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if(($below2+$below3+$below4) != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="below1" class="<?php echo htmlspecialchars($below1Cols); ?>col<?php if (($below2+$below3+$below4) == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="below1" style="html5" />
					</div>
			<?php } ?>
			<?php if ($below2 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="below2" class="<?php echo htmlspecialchars($below2Cols); ?>col<?php if (($below3+$below4) == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if(($below3+$below4) != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="below2" class="<?php echo htmlspecialchars($below2Cols); ?>col<?php if (($below3+$below4) == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="below2" style="html5" />
					</div>
			<?php } ?>
			<?php if ($below3 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="below3" class="<?php echo htmlspecialchars($below3Cols); ?>col<?php if ($below4 == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if($below4 != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="below3" class="<?php echo htmlspecialchars($below3Cols); ?>col<?php if ($below4 == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="below3" style="html5" />
					</div>
			<?php } ?>
			<?php if ($below4 > 0) { ?>
              	<?php if($debug) { ?>
					<div id="below4" class="<?php echo htmlspecialchars($below4Cols); ?>col last" style="border : 1px solid black;">
                <?php } else { ?>
					<div id="below4" class="<?php echo htmlspecialchars($below4Cols); ?>col last">
                <?php } ?>                
						<jdoc:include type="modules" name="below4" style="html5" />
					</div>
			<?php } ?>
		</div>	
	</div>
</div>
<?php } ?>
<?php if ($bottomModules > 0) { ?>
<div id="bottomRow">
	<div class="container">
       	<div class="row clearfix">
			<?php if ($bottom1 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="bottom1" class="<?php echo htmlspecialchars($bottom1Cols); ?>col<?php if (($bottom2+$bottom3+$bottom4) == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if(($bottom2+$bottom3+$bottom4) != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="bottom1" class="<?php echo htmlspecialchars($bottom1Cols); ?>col<?php if (($bottom2+$bottom3+$bottom4) == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="bottom1" style="html5" />
					</div>
			<?php } ?>
			<?php if ($bottom2 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="bottom2" class="<?php echo htmlspecialchars($bottom2Cols); ?>col<?php if (($bottom3+$bottom4) == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if(($bottom3+$bottom4) != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="bottom2" class="<?php echo htmlspecialchars($bottom2Cols); ?>col<?php if (($bottom3+$bottom4) == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="bottom2" style="html5" />
					</div>
			<?php } ?>
			<?php if ($bottom3 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="bottom3" class="<?php echo htmlspecialchars($bottom3Cols); ?>col<?php if ($bottom4 == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if($bottom4 != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="bottom3" class="<?php echo htmlspecialchars($bottom3Cols); ?>col<?php if ($bottom4 == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="bottom3" style="html5" />
					</div>
			<?php } ?>
			<?php if ($bottom4 > 0) { ?>
              	<?php if($debug) { ?>
					<div id="bottom4" class="<?php echo htmlspecialchars($bottom4Cols); ?>col last" style="border : 1px solid black;">
                <?php } else { ?>
					<div id="bottom4" class="<?php echo htmlspecialchars($bottom4Cols); ?>col last">
                <?php } ?>                
						<jdoc:include type="modules" name="bottom4" style="html5" />
					</div>
			<?php } ?>
		</div>	
	</div>
</div>
<?php } ?>
<?php if ($mobileMenu > 0) { ?>
<div id="footerNav" class="mobile">
	<div class="container">
       	<div class="row clearfix">  				                
           	<?php if($debug) { ?>
				<nav id="footerMenu" role="navigation" class="clearfix"  style="border : 1px solid black;">
            <?php } else { ?>
				<nav id="footerMenu" role="navigation" class="clearfix" >
            <?php } ?>                
					<jdoc:include type="modules" name="mobile-menu" style="html5" />
				</nav>
		</div>
	</div>
</div>
<?php } ?>
<?php if ($footerModules > 0) { ?>
<footer role="contentinfo">	
   	<div class="container">
       	<div class="row clearfix">
			<?php if ($footer1 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="footer1" class="<?php echo htmlspecialchars($footer1Cols); ?>col<?php if (($footer2+$footer3+$footer4) == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if(($footer2+$footer3+$footer4) != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="footer1" class="<?php echo htmlspecialchars($footer1Cols); ?>col<?php if (($footer2+$footer3+$footer4) == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="footer1" style="html5" />
					</div>
			<?php } ?>
			<?php if ($footer2 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="footer2" class="<?php echo htmlspecialchars($footer2Cols); ?>col<?php if (($footer3+$footer4) == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if(($footer3+$footer4) != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="footer2" class="<?php echo htmlspecialchars($footer2Cols); ?>col<?php if (($footer3+$footer4) == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="footer2" style="html5" />
					</div>
			<?php } ?>
			<?php if ($footer3 > 0) { ?>
              	<?php if($debug) { ?>
            		<div id="footer3" class="<?php echo htmlspecialchars($footer3Cols); ?>col<?php if ($footer4 == 0) {echo " last";} ?>" style="border : 1px solid black;<?php if($footer4 != 0) {echo 'margin-right : 3.5%;';} ?>"> 
                <?php } else { ?>
            		<div id="footer3" class="<?php echo htmlspecialchars($footer3Cols); ?>col<?php if ($footer4 == 0) {echo " last";} ?>"> 
                <?php } ?>                
						<jdoc:include type="modules" name="footer3" style="html5" />
					</div>
			<?php } ?>
			<?php if ($footer4 > 0) { ?>
              	<?php if($debug) { ?>
					<div id="footer4" class="<?php echo htmlspecialchars($footer4Cols); ?>col last" style="border : 1px solid black;">
                <?php } else { ?>
					<div id="footer4" class="<?php echo htmlspecialchars($footer4Cols); ?>col last">
                <?php } ?>                
						<jdoc:include type="modules" name="footer4" style="html5" />
					</div>
			<?php } ?>
        </div>	
	</div>				
</footer>
<?php } ?>
<footer role="contentinfo">	
   	<div class="container">
       	<div class="row clearfix">      
			<div id="credit" class="last">&copy; <?php echo date("Y"); ?>
				<a href="http://kisswebdesign.co.uk" title="KISS Web Design">KISS Web Design</a>
			</div>
        </div>
	</div>				
</footer>

<jdoc:include type="modules" name="debug"/>

<!-- Scripts -->
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/mylibs/plugins.js"></script>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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

	<!-- Responsive images, for IE7-8 support of dynamic image resizing - doesn't work in IE6 -->
	<!--[if (lt IE 9) & (gt IE 6) & (!IEMobile)]>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/js/mylibs/imgSizer.js"></script>
	<![endif]-->

<?php if ($analytics != "UA-XXXXX-X") : ?>
<!-- http://mths.be/aab -->
<script>
var _gaq=[['_setAccount','<?php echo htmlspecialchars($analytics); ?>'],['_trackPageview']]; 
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

<noscript>JavaScript is unavailable or disabled. This site will still function, but some useful features will not work.</noscript>
</body>
</html>