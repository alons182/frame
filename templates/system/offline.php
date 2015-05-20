<?php
/**
 * @package     Joomla.Site
 * @subpackage  Template.system
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app = JFactory::getApplication();


?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="maintenance mode">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>We are in maintenance</title>

    <!-- Bootstrap -->
    <link href="<?php echo $this->baseurl; ?>/templates/system/assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo $this->baseurl; ?>/templates/system/assets/css/bootstrap-theme.css" rel="stylesheet">

    <!-- siimple style -->
    <link href="<?php echo $this->baseurl; ?>/templates/system/assets/css/style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

	<div id="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<h1>Maintenance</h1>
					<h2 class="subtitle">
					<?php if ($app->get('display_offline_message', 1) == 1 && str_replace(' ', '', $app->get('offline_message')) != '') : ?>
						
							<?php echo $app->get('offline_message'); ?>
					
					<?php elseif ($app->get('display_offline_message', 1) == 2 && str_replace(' ', '', JText::_('JOFFLINE_MESSAGE')) != '') : ?>
						
							<?php echo JText::_('JOFFLINE_MESSAGE'); ?>
						
					<?php endif; ?></h2>
					<div id="countdown"></div>
					
					
				</div>
				
			</div>
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
						<p class="copyright">Copyright &copy; 2015 - <a href="http://frame.cr">frame.cr</a></p>
				</div>
			</div>		
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	
  </body>
</html>
