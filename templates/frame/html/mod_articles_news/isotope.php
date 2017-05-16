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
		<?php foreach ($list as $index => $item) : ?>
			
			<?php if ( $item->id == 66 || $item->id == 58) :  ?>
				<div class="projects-item featured-4" data-order="<?php echo $index ?>">
				<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>
				</div>
			<?php else if ( $item->id == 67) :  ?> 
				<div class="projects-item featured-3" data-order="<?php echo $index ?>">
				<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>
				</div>
			<?php else if ( $item->id == 19 || $item->id == 14) :  ?> 
				<div class="projects-item featured" data-order="<?php echo $index ?>">
				<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>
				</div>
			<?php else : ?>
			 	<div class="projects-item default" data-order="<?php echo $index ?>">
			 	<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>
				</div>
		    <?php endif; ?>
			
	

		<?php endforeach; ?>
	</div>
</div>
