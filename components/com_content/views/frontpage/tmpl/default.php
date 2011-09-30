<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
echo "<pre>";
$app = JFactory::getApplication();
$templateDir = JURI::base() . 'templates/' . $app->getTemplate();


?>

<DIV CLASS="span-17 spacegallery" ID="myGallery"> 
                <IMG ALT="" SRC="<?php echo $templateDir; ?>/images/gallary/home5.png" /> 
                <!--IMG ALT="" SRC="images/gallary/home4.png" /> 
                <IMG ALT="" SRC="images/gallary/home3.png" /> 
                <IMG ALT="" SRC="<?php// echo $this->baseurl ?>/templates/rhuk_milkyway/images/gallary/home2.png" /--> 
                <!--IMG ALT="" SRC="<?php// echo $this->baseurl ?>/templates/rhuk_milkyway/images/gallary/home1.png" /--> 
            </DIV>
            <DIV CLASS="span-7 last" id="wrapperright">
            	<div class="span-7 last" id="righttop">
                &nbsp;
                </div>
            </DIV>
<?php echo "hi"; ?>
