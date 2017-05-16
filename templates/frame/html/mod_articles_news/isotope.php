<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/*function dd()
  {
    array_map(function($x) { var_dump($x); }, func_get_args()); die;
  }*/
?>

<div class="newsflash<?php echo $moduleclass_sfx; ?>">
	<div class="projects-container" data-nav-color="#fff">
		<?php foreach ($list as $index => $item) : 
			$classFeatured = "default";
		  ?>
			
			<?php if ( $item->id == 66 || $item->id == 58) :  ?>
				
				<?php $classFeatured = "featured"; ?>
				
		    <?php endif; ?>
			<?php if ( $item->id == 67) :  ?> 
				<?php $classFeatured = "featured"; ?>
			 <?php endif; ?>
			<?php if ( $item->id == 19 || $item->id == 14) :  ?> 
				<?php $classFeatured = "featured"; ?>
			
		    <?php endif; ?>
			
				<div class="projects-item <?php echo $classFeatured ?>" data-order="<?php echo $index ?>">
			 	<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>
				</div>

		<?php endforeach; ?>
	</div>
</div>
