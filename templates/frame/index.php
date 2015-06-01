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
            <a href="<?php echo $this->baseurl ?>" class="header-logo"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo.png" class="header-logo-img" alt="Frame Projects" /></a>
            <button class="btn-menu"><i class="icon-bars"></i></button>
            <nav class="menu">
                <jdoc:include type="modules" name="menu" style="none" />
            </nav>
            <div class="header-contactCall">
              
              <a href="https://www.facebook.com/pages/Frame-Projects/530518097057043" target="_blank"><i class="icon-facebook"></i></a>
              <!--<a href="#"><i class="icon-google-plus"></i></a>-->
              <a href="skype:frame.projects?chat"><i class="icon-skype"></i></a>
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
                  © 2015 <a href="http://avotz.com" target="_blank"><span class="icon-avotz"></span></a>
                </div>
            </div>
        </footer>


        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bundle.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
       <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-63634740-1', 'auto');
          ga('send', 'pageview');

        </script>


        <jdoc:include type="modules" name="debug" style="none" />
    </body>

</html>
