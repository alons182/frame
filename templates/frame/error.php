<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
jimport( 'joomla.application.module.helper' );

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$renderer = $doc->loadRenderer('module');

$itemid   = $app->input->getCmd('Itemid', '');

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>
	<meta charset="utf-8">
    <title><?php echo $this->title; ?> <?php echo $this->error->getMessage();?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bundle.css" type="text/css" />

</head>

<body class="<?php echo ($itemid ? ' bgid-' . $itemid : '')?>" data-form="<?php echo ($itemid ? $itemid : '')?>">

        <header class="header">
          <div class="inner">
            <a href="./" class="header-logo"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo.png" class="header-logo-img" alt="Frame Projects" /></a>
            <button class="btn-menu"><i class="icon-bars"></i></button>
            <nav class="menu">
                <?php if (JModuleHelper::getModule('menu')) : ?>
                            <?php
                                            $mt = JModuleHelper::getModule('menu');
                                            echo JModuleHelper::renderModule($mt);
                                        ?>
                            <?php endif; ?>
            </nav>
            <div class="header-contactCall">
              
              <a href="https://www.facebook.com/pages/Frame-Projects/530518097057043" target="_blank"><i class="icon-facebook"></i></a>
              <!--<a href="#"><i class="icon-google-plus"></i></a>-->
              <a href="skype:frame.projects?chat"><i class="icon-skype"></i></a>
            </div>
          </div>
        </header>
        
        <section class="main">

            <jdoc:include type="message" />
            <jdoc:include type="component" />
            <div class="text404 txt-center">
                    <h1 class="page-header"><?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?></h1>
                        <div class="well">
                            <div class="row-fluid">
                                <div class="span6">
                                    <p><strong><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></strong></p>
                                    <p><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></p>
                                    <ul>
                                        <li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
                                        <li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
                                        <li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
                                        <li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
                                    </ul>
                                </div>
                                <div class="span6">
                                    <?php if (JModuleHelper::getModule('search')) : ?>
                                        <p><strong><?php echo JText::_('JERROR_LAYOUT_SEARCH'); ?></strong></p>
                                        <p><?php echo JText::_('JERROR_LAYOUT_SEARCH_PAGE'); ?></p>
                                        <?php
                                            $module = JModuleHelper::getModule('search');
                                            echo JModuleHelper::renderModule($module);
                                        ?>
                                    <?php endif; ?>
                                    <p><?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?></p>
                                    <p><a href="<?php echo $this->baseurl; ?>/index.php" class="btn btn-red"><i class="icon-home"></i> <?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a></p>
                                </div>
                            </div>
                            <hr />
                            <p><?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?></p>
                            <blockquote>
                                <span class="label label-inverse"><?php echo $this->error->getCode(); ?></span> <?php echo $this->error->getMessage();?>
                            </blockquote>
                        </div>

                </div>

        </section>
        <footer class="footer">
            <div class="inner">
                <span  class="footer-logo"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo-footer.png" alt="Frame Projects" /></span>
                <?php
                        $modules = JModuleHelper::getModules('footer-links');
                        foreach ($modules as $module) {
                            echo JModuleHelper::renderModule($module->title);
                                echo JModuleHelper::renderModule($module);
                        }
                                        ?>
                <div class="footer-copyright">
                  © 2015 <span class="icon-avotz"></span>
                </div>
            </div>
        </foooter>


        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bundle.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
       <!-- <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->


        <jdoc:include type="modules" name="debug" style="none" />
    </body>

</html>
