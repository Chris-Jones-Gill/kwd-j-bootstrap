<?php defined('_JEXEC') or die;
/* =====================================================================
 * Template:	kwd-j-bootstrap						            
 * Author: 		Chris Jones-Gill - KISS Web Design - @KissWebDesign 				            
 * Version: 	0.2 											             
 * Created: 	June 2012 
 * Copyright:	Seth Warburton - (C) 2011 - All rights reserved	                                                   
 * Copyright:	File modifications : KISS Web Design - (C) 2012 - All rights reserved			         					         
 * License: 	GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 * 
 * Forked From:	OneWeb for Joomla 2.5
 * Github:		https://github.com/nternetinspired/OneWeb
/* ===================================================================== */

/* Let's make the module output using HTML5 elements */

function modChrome_html5($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
    <article class="moduletable" id="module-<?php echo $module->id; ?>">
		<?php if ($module->showtitle) : ?>
            <header class="module-title">
                <h3>
               		<?php echo $module->title; ?>
                </h3>
            </header>
		<?php endif; ?>
            <section class="module-content">
                <?php echo $module->content; ?>
            </section>
    </article>
	<?php endif;
}