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
			<?php if ($item->id == 53 || $item->id == 54) : ?>
				<div class="projects-item featured" data-order="<?php echo $index ?>">
					<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_itemWithoutLink'); ?>
				</div>
			<?php else : ?>	
				<div class="projects-item <?php echo ( $item->id == 19 || $item->id == 14 || $item->id == 23 ) ?  'featured' : 'default'  ?>" data-order="<?php echo $index ?>">
					<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>
				</div>
			<?php endif; ?>

		<?php endforeach; ?>
	</div>
</div>
