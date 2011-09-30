<?php
/**
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />

<LINK HREF="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/blueprint/screen.css" MEDIA="screen, projection" REL="stylesheet"
          TYPE="text/css">
    <LINK HREF="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/blueprint/blueprint-wp.css" MEDIA="screen, projection"
          REL="stylesheet" TYPE="text/css">
    <LINK HREF="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/blueprint/print.css" MEDIA="print" REL="stylesheet"
          TYPE="text/css">
    <LINK HREF="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/blueprint/reset.css" MEDIA="screen" REL="stylesheet"
          TYPE="text/css" />
<LINK HREF="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/blueprint/mycss.css" REL="stylesheet" TYPE="text/css">
    <LINK HREF="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/blueprint/layout.css" MEDIA="screen" REL="stylesheet"
          TYPE="text/css" />
          <LINK HREF="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/blueprint/custom.css" MEDIA="screen" REL="stylesheet"
          TYPE="text/css" />

<!--[if lte IE 6]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/blueprint/css/ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
<?php if($this->direction == 'rtl') : ?>
	<link href="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/css/template_rtl.css" rel="stylesheet" type="text/css" />
<?php endif; ?>

</head>
<body>
	<!-- Container Div-->
    <DIV CLASS="container showgrid">
    	<!-- top most gap -->
    	<DIV CLASS="span-24 last" ID="topmostgap">&nbsp;</DIV>
        <!-- header div -->
        <DIV CLASS="span-24 last headerdiv"> 
        	<DIV CLASS="span-24 prepend-1 last" ID="logodiv"> 
                <IMG ALT="Aspire Logo" SRC="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/images/logo.jpg"/> 
            </DIV>
            <DIV CLASS="span-24 prepend-1 last logotext"
                 STYLE="border:0px solid #7A7979;text-align:left;"> Fun and affordable way to look better, feel better 
            </DIV>
        </DIV>
        <!-- gap -->
        <DIV CLASS="span-24 last" ID="topmenugap">&nbsp;</DIV>
        <!-- middle content -->
        <DIV CLASS="span-24 last" ID="middlecontent"> 
            <DIV id="menubar" CLASS="span-24 last"> 
                <jdoc:include type="modules" name="user3" />
            </DIV>
            <DIV CLASS="span-24 last" ID="mygallarygap">&nbsp;</DIV>
            <DIV CLASS="span-17 spacegallery" ID="myGallery"> 
                <!--IMG ALT="" SRC="images/gallary/home5.png" /> 
                <IMG ALT="" SRC="images/gallary/home4.png" /> 
                <IMG ALT="" SRC="images/gallary/home3.png" /> 
                <IMG ALT="" SRC="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/images/gallary/home2.png" /--> 
                <!--IMG ALT="" SRC="<?php echo $this->baseurl ?>/templates/rhuk_milkyway/images/gallary/home1.png" /--> 
            </DIV>
            <DIV CLASS="span-7 last" id="wrapperright">
            	<div class="span-7 last" id="righttop">
                &nbsp;
                </div>
            </DIV>
        </DIV>
        <!-- gap -->
        <DIV CLASS="span-24 last" STYLE="height:4px;">&nbsp;</DIV>
        <!-- footer -->
        <DIV CLASS="span-24 last">
		    <jdoc:include type="modules" name="footer" style="xhtml"/>
        </DIV>
    </DIV>
</body>
</html>
