<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  Templates.Puravida
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;



$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;


$itemid   = $app->input->getCmd('Itemid', '');

// Add JavaScript Frameworks
//JHtml::_('bootstrap.framework');

// Add Stylesheets

$doc->addStyleSheet('templates/'.$this->template.'/css/bundle.css');

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<jdoc:include type="head" />




</head>


 <body class="<?php echo ($itemid ? ' bgid-' . $itemid : '')?>" data-form="<?php echo ($itemid ? $itemid : '')?>">

        <header class="header">
          <div class="inner">
            <a href="./" class="header-logo"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo.png" class="header-logo-img" alt="Frame Projects" /></a>
            <button class="btn-menu"><i class="icon-bars"></i></button>
            <nav class="menu">
                <jdoc:include type="modules" name="menu" style="none" />
            </nav>
            <div class="header-contactCall">
              
              <a href="#"><i class="icon-facebook"></i></a>
              <a href="#"><i class="icon-twitter"></i></a>
              <a href="#"><i class="icon-google-plus"></i></a>
              <a href="#"><i class="icon-skype"></i></a>
            </div>
          </div>
        </header>
        <?php if ($this->countModules('banner')) : ?>
            <jdoc:include type="modules" name="banner" style="none" />
        <?php endif; ?>

        <?php if ($this->countModules('testimonials')) : ?>
            <jdoc:include type="modules" name="testimonials" style="none" />
         <?php endif; ?>
        <section class="main">

            <jdoc:include type="message" />
            <jdoc:include type="component" />
            <?php if ($this->countModules('projects')) : ?>
                <jdoc:include type="modules" name="projects" style="none" />
            <?php endif; ?>
        </section>
        <footer class="footer">
            <div class="inner">
                <span  class="footer-logo"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo-footer.png" alt="Frame Projects" /></span>
                <?php if ($this->countModules('footer-links')) : ?>
                    <jdoc:include type="modules" name="footer-links" style="none" />
                <?php endif; ?>
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
