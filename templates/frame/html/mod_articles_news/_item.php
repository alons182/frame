<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$item_heading = $params->get('item_heading', 'h4');
$images  = json_decode($item->images);
?>



		<!--image article-->
		<?php if (isset($images->image_intro) && !empty($images->image_intro)) : ?>
			<img
			<?php if ($images->image_intro_caption):
				echo 'class="caption"'.' title="' .htmlspecialchars($images->image_intro_caption) . '"';
			endif; ?>
			src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" itemprop="image" class="projects-image" />

		<?php endif; ?>

		<a href="<?php echo $item->link ?>" class="projects-link">
				<div class="projects-content">
						<h4 class="projects-title"><?php echo $item->title; ?></h4>
						<p class="projects-description">
							<?php
									$str = $item->introtext;

									if (strlen($str) > 80)
							   		$str = substr($str, 0, 80) . '...';

									echo $str;

							?>

						</p>
				</div>
		</a>
