<?php
 /* =====================================================================
Template:	OneWeb for Joomla 2.5						            
Author: 	Seth Warburton - Internet Inspired! - @nternetinspired 				            
Version: 	1.0 											             
Created: 	Feb 2012                                                    
Copyright:	Seth Warburton - (C) 2012 - All rights reserved		
License:	GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
Source: 	J2.5.1. com_content/views/							             		
/* ===================================================================== */

// no direct access
defined('_JEXEC') or die;

// Create a shortcut for params.
$params = &$this->item->params;
$images = json_decode($this->item->images);
$canEdit	= $this->item->params->get('access-edit');
?>

<?php if ($this->item->state == 0) : ?>
<div class="system-unpublished">
<?php endif; ?>
<?php if ($params->get('show_title')) : ?>
<header>
	<h2>
		<?php if ($params->get('link_titles') && $params->get('access-view')) : ?>
			<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid)); ?>">
			<?php echo $this->escape($this->item->title); ?></a>
		<?php else : ?>
			<?php echo $this->escape($this->item->title); ?>
		<?php endif; ?>
	</h2>
</header>    
<?php endif; ?>

<?php if ($params->get('show_print_icon') || $params->get('show_email_icon') || $canEdit) : ?>
	<section class="actions">
        <ul>
            <?php if ($params->get('show_print_icon')) : ?>
            <li class="print-icon">
                <?php echo JHtml::_('icon.print_popup', $this->item, $params); ?>
            </li>
            <?php endif; ?>
            <?php if ($params->get('show_email_icon')) : ?>
            <li class="email-icon">
                <?php echo JHtml::_('icon.email', $this->item, $params); ?>
            </li>
            <?php endif; ?>
    
            <?php if ($canEdit) : ?>
            <li class="edit-icon">
                <?php echo JHtml::_('icon.edit', $this->item, $params); ?>
            </li>
            <?php endif; ?>
        </ul>
    </section>
<?php endif; ?>

<?php if (!$params->get('show_intro')) : ?>
	<?php echo $this->item->event->afterDisplayTitle; ?>
<?php endif; ?>

<?php echo $this->item->event->beforeDisplayContent; ?>

<?php // to do not that elegant would be nice to group the params ?>

<?php if (($params->get('show_author')) or ($params->get('show_category')) or ($params->get('show_create_date')) or ($params->get('show_modify_date')) or ($params->get('show_publish_date')) or ($params->get('show_parent_category')) or ($params->get('show_hits'))) : ?>
<aside class="article-meta">
<span class="article-info-term"><?php  echo JText::_('COM_CONTENT_ARTICLE_INFO'); ?></span>
<?php endif; ?>
<?php if ($params->get('show_parent_category') && $this->item->parent_id != 1) : ?>
		<span class="parent-category-name">
			<?php $title = $this->escape($this->item->parent_title);
				$url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->parent_slug)) . '">' . $title . '</a>'; ?>
			<?php if ($params->get('link_parent_category') AND $this->item->parent_slug) : ?>
				<?php echo JText::sprintf('COM_CONTENT_PARENT', $url); ?>
				<?php else : ?>
				<?php echo JText::sprintf('COM_CONTENT_PARENT', $title); ?>
			<?php endif; ?>
		</span>
<?php endif; ?>
<?php if ($params->get('show_category')) : ?>
		<span class="category-name">
			<?php $title = $this->escape($this->item->category_title);
				$url = '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catslug)).'">'.$title.'</a>';?>
			<?php if ($params->get('link_category') AND $this->item->catslug) : ?>
				<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $url); ?>
				<?php else : ?>
				<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $title); ?>
			<?php endif; ?>
		</span>
<?php endif; ?>
<?php if ($params->get('show_create_date')) : ?>
    <span class="createDate"><?php echo JText::_('COM_CONTENT_CREATED_DATE_ON') ;?>
        <span class="day"><?php echo JText::sprintf( JHTML::_('date',$this->item->created, JText::_('d'))); ?></span>
        <span class="month"><?php echo JText::sprintf( JHTML::_('date',$this->item->created, JText::_('F'))); ?></span>
        <span class="year"><?php echo JText::sprintf( JHTML::_('date',$this->item->created, JText::_('Y'))); ?></span>
    </span>
<?php endif; ?>
<?php if ($params->get('show_publish_date')) : ?>
    <span class="publishDate"><?php echo JText::_('COM_CONTENT_PUBLISHED_DATE') ;?>
        <span class="day"><?php echo JText::sprintf( JHTML::_('date',$this->item->publish_up, JText::_('d'))); ?></span>
        <span class="month"><?php echo JText::sprintf( JHTML::_('date',$this->item->publish_up, JText::_('F'))); ?></span>
        <span class="year"><?php echo JText::sprintf( JHTML::_('date',$this->item->publish_up, JText::_('Y'))); ?></span>
    </span>
<?php endif; ?>
<?php if ($params->get('show_modify_date')) : ?>
    <span class="modifiedDate"><?php echo JText::_('COM_CONTENT_LAST_UPDATED') ;?>
        <span class="day"><?php echo JText::sprintf( JHTML::_('date',$this->item->modified, JText::_('d'))); ?></span>
        <span class="month"><?php echo JText::sprintf( JHTML::_('date',$this->item->modified, JText::_('F'))); ?></span>
        <span class="year"><?php echo JText::sprintf( JHTML::_('date',$this->item->modified, JText::_('Y'))); ?></span>
    </span>
<?php endif; ?>
<?php if ($params->get('show_author') && !empty($this->item->author )) : ?>
	<span class="createdby">
		<?php $author =  $this->item->author; ?>
		<?php $author = ($this->item->created_by_alias ? $this->item->created_by_alias : $author);?>

			<?php if (!empty($this->item->contactid ) &&  $params->get('link_author') == true):?>
				<?php 	echo JText::sprintf('COM_CONTENT_WRITTEN_BY' ,
				 JHtml::_('link',JRoute::_('index.php?option=com_contact&view=contact&id='.$this->item->contactid),$author)); ?>

			<?php else :?>
				<?php echo JText::sprintf('COM_CONTENT_WRITTEN_BY', $author); ?>
			<?php endif; ?>
	</span>
<?php endif; ?>
<?php if ($params->get('show_hits')) : ?>
		<span class="hits">
		<?php echo JText::sprintf('COM_CONTENT_ARTICLE_HITS', $this->item->hits); ?>
		</span>
<?php endif; ?>
<?php if (($params->get('show_author')) or ($params->get('show_category')) or ($params->get('show_create_date')) or ($params->get('show_modify_date')) or ($params->get('show_publish_date')) or ($params->get('show_parent_category')) or ($params->get('show_hits'))) : ?>
 </aside>
<?php endif; ?>

<section class="article-intro">
<?php  if (isset($images->image_intro) and !empty($images->image_intro)) : ?>
	<?php $imgfloat = (empty($images->float_intro)) ? $params->get('float_intro') : $images->float_intro; ?>

	<div class="img-intro-<?php echo htmlspecialchars($imgfloat); ?>">
	<img
		<?php if ($images->image_intro_caption):
			echo 'class="caption"'.' title="' .htmlspecialchars($images->image_intro_caption) .'"';
		endif; ?>
		src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
	</div>
<?php endif; ?>

<?php echo $this->item->introtext; ?>
</section>

<?php if ($params->get('show_readmore') && $this->item->readmore) :
	if ($params->get('access-view')) :
		$link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid));
	else :
		$menu = JFactory::getApplication()->getMenu();
		$active = $menu->getActive();
		$itemId = $active->id;
		$link1 = JRoute::_('index.php?option=com_users&view=login&&Itemid=' . $itemId);
		$returnURL = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid));
		$link = new JURI($link1);
		$link->setVar('return', base64_encode($returnURL));
	endif;
?>
<footer class="article-readmore">
			<p class="readmore">
				<a href="<?php echo $link; ?>">
					<?php if (!$params->get('access-view')) :
						echo JText::_('COM_CONTENT_REGISTER_TO_READ_MORE');
					elseif ($readmore = $this->item->alternative_readmore) :
						echo $readmore;
						if ($params->get('show_readmore_title', 0) != 0) :
						    echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
						endif;
					elseif ($params->get('show_readmore_title', 0) == 0) :
						echo JText::sprintf('COM_CONTENT_READ_MORE_TITLE');
					else :
						echo JText::_('COM_CONTENT_READ_MORE');
						echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
					endif; ?></a>
		</p>
</footer>        
<?php endif; ?>

<?php if ($this->item->state == 0) : ?>

<?php endif; ?>

<?php echo $this->item->event->afterDisplayContent; ?>
