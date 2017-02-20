<?php
defined('_JEXEC') or die;
/**
 *-------------------------------------------
 * Szablon został wypalony w  Diablodesign.
 * www.diablodesign.eu
 * biuro@diablodesign.eu
 * tel.666-977-944
 *-------------------------------------------
 */
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';

$document = $this;

$templateUrl = $document->baseurl . '/templates/' . $document->template;

Artx::load("Artx_Page");

$view = $this->artx = new ArtxPage($this);

$view->componentWrapper();

JHtml::_('behavior.framework', true);
$app = JFactory::getApplication();
$tplparams	= $app->getTemplate(true)->params;
//on off

$backc = htmlspecialchars($tplparams->get('backc'));

?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $document->language; ?>">
<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />


    
    
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width" />

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.css" media="screen" type="text/css" />
    <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.responsive.css" media="all" type="text/css" />

<link rel="shortcut icon" href="<?php echo $templateUrl; ?>/favicon.ico" type="image/x-icon" />
    <script>if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
    <script src="<?php echo $templateUrl; ?>/jquery.js"></script>
    <script>jQuery.noConflict();</script>

    <script src="<?php echo $templateUrl; ?>/script.js"></script>
    <script src="<?php echo $templateUrl; ?>/script.responsive.js"></script>
    <script src="<?php echo $templateUrl; ?>/modules.js"></script>
    <?php $view->includeInlineScripts() ?>
    <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
    <?php if ($backc == 1) { ?> <!--scroling head-->
<script src="<?php echo $templateUrl; ?>/js/scroling.js"></script>
<script type="text/javascript">
$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();	
		} else {
			$('#toTop').fadeOut();
		}
	});
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});
</script>
<!--end scroling--><?php } ?>
</head>
<body>
<!--License Number :<?php echo $this->params->get('license'); ?>-->
<?php if ($backc == 1) { ?><div id="toTop"></div><?php } ?>
<div id="dd-main">
<header class="dd-header"><?php echo $view->position('position-30', 'dd-nostyle'); ?>

    <div class="dd-shapes">
        <div class="dd-object1075803632"></div>
<div class="dd-object1545816185"></div>
<div class="dd-object1606032627"></div>
<div class="dd-object2122474996"></div>
<div class="dd-object380642814"></div>
<div class="dd-object310795231"></div>
<div class="dd-object522852718"></div>
<div class="dd-object919769992"></div>
<div class="dd-object908552167"></div>
<div class="dd-object422033087"></div>
<div class="dd-textblock dd-object1799037601">
        <div class="dd-object1799037601-text-container">
        <div class="dd-object1799037601-text"><p><span class="Apple-style-span" style="font-size: 18px; font-weight: bold; text-shadow: rgba(255, 255, 255, 0.480469) 1px 1px 0px; color: #E6287E; "><?php echo $this->params->get('title'); ?></span></p><p><br /></p><p><?php echo $this->params->get('text'); ?></p></div>
    </div>
    
</div>
            </div>



<div class="dd-textblock dd-textblock-1954962918">
        <div class="dd-textblock-1954962918-text-container">
        <div class="dd-textblock-1954962918-text"><a href="<?php echo $this->params->get('facebook'); ?>" target="_blank" class="dd-facebook-tag-icon"></a></div>
    </div>
    
</div><div class="dd-textblock dd-textblock-2004913695">
        <div class="dd-textblock-2004913695-text-container">
        <div class="dd-textblock-2004913695-text"><a href="<?php echo $this->params->get('twitter'); ?>" target="_blank" class="dd-twitter-tag-icon"></a></div>
    </div>
    
</div>
<a href="#" class="dd-logo dd-logo-407058878">
    <img src="<?php echo $templateUrl; ?>/images/logo-407058878.png" alt="" />
</a><a href="<?php echo $this->baseurl ?>" class="dd-logo dd-logo-1944277602">
    <img src="<?php echo $this->params->get('logo'); ?>" alt="" />
</a><a href="#" class="dd-logo dd-logo-1717819953">




    <img src="<?php echo $templateUrl; ?>/images/logo-1717819953.png" alt="" />
</a>
<div class="dd-textblock dd-object995499080">
    <form class="dd-search" name="Search" action="<?php echo $document->baseurl; ?>/index.php" method="post">
    <input type="text" value="" name="searchword" />
        <input type="hidden" name="task" value="search" />
<input type="hidden" name="option" value="com_search" />
<input type="submit" value="" name="search" class="dd-search-button" />
        </form>
</div>
                        <div id="dd-flash-area">
                    <div id="dd-flash-container">
                    <object width="799" height="268" id="dd-flash-object" data="<?php echo $templateUrl; ?>/images/flash.swf" type="application/x-shockwave-flash">
                        <param name="quality" value="high" />
                    	<param name="scale" value="exactfit" />
                    	<param name="wmode" value="transparent" />
                    	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
                        <param name="swfliveconnect" value="true" />
                        <!--[if !IE]>-->
                        <object type="application/x-shockwave-flash" data="<?php echo $templateUrl; ?>/images/flash.swf" width="799" height="268">
                            <param name="quality" value="high" />
                    	    <param name="scale" value="exactfit" />
                            <param name="wmode" value="transparent" />
                                                    	    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
                            <param name="swfliveconnect" value="true" />
                        <!--<![endif]-->
                          	<div class="dd-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>
                        <!--[if !IE]>-->
                        </object>
                        <!--<![endif]-->
                    </object>
                    </div>
                    </div>
<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
<nav class="dd-nav">
    
<?php if ($view->containsModules('position-28')) : ?>
<div class="dd-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
<?php endif; ?>
<?php if ($view->containsModules('position-29')) : ?>
<div class="dd-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
<?php endif; ?>
<?php echo $view->position('position-1'); ?>
 
    </nav>
<?php endif; ?>

                    
</header>
<div class="dd-sheet clearfix">
            <?php echo $view->position('position-15', 'dd-nostyle'); ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33, 'position-18' => 34), 'dd-block'); ?>
<div class="dd-layout-wrapper">
                <div class="dd-content-layout">
                    <div class="dd-content-layout-row">
                        <?php if ($view->containsModules('position-7', 'position-4', 'position-5')) : ?>
<div class="dd-layout-cell dd-sidebar1">
<?php echo $view->position('position-7', 'dd-block'); ?>
<?php echo $view->position('position-4', 'dd-block'); ?>
<?php echo $view->position('position-5', 'dd-block'); ?>




                        </div>
<?php endif; ?>

                        <div class="dd-layout-cell dd-content">
<?php
  echo $view->position('position-19', 'dd-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
  echo $view->positions(array('position-20' => 50, 'position-21' => 50), 'dd-article');
  echo $view->position('position-12', 'dd-nostyle');
  echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' dd-messages'));
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'dd-nostyle');
  echo $view->positions(array('position-23' => 50, 'position-24' => 50), 'dd-article');
  echo $view->position('position-25', 'dd-nostyle');
?>



                        </div>
                        <?php if ($view->containsModules('position-6', 'position-8', 'position-3')) : ?>
<div class="dd-layout-cell dd-sidebar2">
<?php echo $view->position('position-6', 'dd-block'); ?>
<?php echo $view->position('position-8', 'dd-block'); ?>
<?php echo $view->position('position-3', 'dd-block'); ?>


                        </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
<?php echo $view->positions(array('position-9' => 33, 'position-10' => 33, 'position-11' => 34), 'dd-block'); ?>
<?php echo $view->position('position-26', 'dd-nostyle'); ?>

<footer class="dd-footer">
<?php if ($view->containsModules('position-27')) : ?>
    <?php echo $view->position('position-27', 'dd-nostyle'); ?>
<?php else: ?>
<span style="font-size: 12px;">
Copyright © <?php echo date("Y");?> <span style="color: rgb(255, 255, 255);"><?php echo $this->params->get('footer'); ?>&nbsp;</span>&nbsp;Rights Reserved.
</span>
<?php endif; ?>
</footer>

    </div>
    <p class="dd-page-footer">
        <span id="dd-footnote-links">Designed by <a href="http://www.diablodesign.eu" target="_blank">www.diablodesign.eu</a>.</span>
    </p>
</div>


<?php echo $view->position('debug'); ?>
</body>
</html>