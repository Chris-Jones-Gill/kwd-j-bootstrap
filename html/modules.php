<?php defined('_JEXEC') or die;
/* =====================================================================
Template:	OneWeb for Joomla 2.5						            
Author: 	Seth Warburton - Internet Inspired! - @nternetinspired 				            
Version: 	0.1 											             
Created: 	Jan 2012                                                    
Copyright:	Seth Warburton - (C) 2011 - All rights reserved			         					         
License: 	GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
/* ===================================================================== */

/* Let's make the module output using HTML5 elements */

function modChrome_html5($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
    <article class="moduletable<?php echo $params->get('moduleclass_sfx'); ?>" id="module-<?php echo $module->id; ?>">
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