<?php 

defined('_JEXEC') or die('Restricted access');
$editor =& JFactory::getEditor();
?>
	
<form action="index.php" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
<div class="col100">
    <!--fieldset class="adminform"-->
        <!--legend><?php echo JText::_( 'Details' ); ?></legend!-->
        <table class="admintable">
        <tr>
            <td>
                    <?php echo JText::_( 'First Name' ); ?>:
            </td>
            <td>
                <?php echo $this->trailvar->firstname;?>
            </td>
        </tr>
        <tr>
            <td>
              <?php echo JText::_( 'Last Name' ); ?>:
            </td>
            <td>
  				<?php echo $this->trailvar->lastname;?>
            </td>
        </tr>
        <tr>
            <td>
                    <?php echo JText::_( 'Your Email' ); ?>:
            </td>
            <td>
                <?php echo $this->trailvar->email;?>
            </td>
        </tr>
        <tr>
        	<td>
                    <?php echo JText::_( 'Source' ); ?>:
            </td>
            <td>
                <?php echo $this->trailvar->source; ?>
            </td>
            
         </tr>
		
        <tr>            
            <td>
                    <?php echo JText::_( 'Description' ); ?>:
            </td>
            <td>
                	<?php echo $this->trailvar->description ;?>
            </td>
		</tr>
        
        </table>
    <!--/fieldset-->
</div>
 
<div class="clr"></div>
 
<input type="hidden" name="option" value="com_contactus"/>

<input type="hidden" name="id" value="<?php echo $this->trailvar->id; ?>" />

<input type="hidden" name="task" value="save"/>

<input type="hidden" name="controller" value="editContactus" />

     
</form>
 