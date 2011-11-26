<?php
	defined('_JEXEC') or die('Restricted access'); ?>
<form action="index.php" method="post" name="adminForm" id="adminForm">
<div class="col100">
    <fieldset class="adminform">
        <legend><?php echo JText::_( 'Details' ); ?></legend>
        <table class="admintable">
        <tr>
            <td width="100" align="right" class="key">
                <label for="coach_name">
                    <?php echo JText::_( 'Coach Name' ); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="coach_name" id="coach_name" size="32" maxlength="250" value="<?php echo $this->regvar->coach_name;?>" />
            </td>
            </tr>
            <tr>
            <td width="100" align="right" class="key">
                <label for="coach_phone_no">
                    <?php echo JText::_( 'coach phone no' ); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="coach_phone_no" id="coach_phone_no" size="32" maxlength="250" value="<?php echo $this->regvar->coach_phone_no;?>" />
            </td>
            </tr>
            <tr>
            <td width="100" align="right" class="key">
                <label for="address">
                    <?php echo JText::_( 'Address' ); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="address" id="address" size="32" maxlength="250" value="<?php echo $this->regvar->address;?>" />
            </td>
            </tr>
            <tr>
            <td width="100" align="right" class="key">
                <label for="post_code">
                    <?php echo JText::_( 'post code' ); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="post_code" id="post_code" size="32" maxlength="250" value="<?php echo $this->regvar->post_code;?>" />
            </td>
            </tr>
            <tr>
            <td width="100" align="right" class="key">
                <label for="coach_name">
                    <?php echo JText::_( 'Name' ); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="	name" id="name" size="32" maxlength="250" value="<?php echo $this->regvar->name;?>" />
            </td>
            </tr>
            <tr>
            <td width="100" align="right" class="key">
                <label for="phone_no">
                    <?php echo JText::_( 'phone no' ); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="phone_no" id="phone_no" size="32" maxlength="250" value="<?php echo $this->regvar->phone_no;?>" />
            </td>
            </tr>
            <tr>
            <td width="100" align="right" class="key">
                <label for="referee_name">
                    <?php echo JText::_( 'referee name' ); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="referee_name" id="referee_name" size="32" maxlength="250" value="<?php echo $this->regvar->referee_name;?>" />
            </td>
            </tr>
            <tr>
            <td width="100" align="right" class="key">
                <label for="referee_phone_no">
                    <?php echo JText::_( 'referee phone no' ); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="referee_phone_no" id="referee_phone_no" size="32" maxlength="250" value="<?php echo $this->regvar->referee_phone_no;?>" />
            </td>
           </tr>
           <tr>
           <td width="100" align="right" class="key">
                <label for="referee_organisation">
                    <?php echo JText::_('referee organisation' ); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="referee_organisation" id="referee_organisation" size="32" maxlength="250" value="<?php echo $this->regvar->referee_organisation;?>" />
            </td>
           </tr>
           <tr>
           <td width="100" align="right" class="key">
                <label for="description">
                    <?php echo JText::_( 'Description' ); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="description" id="description" size="32" maxlength="250" value="<?php echo $this->regvar->description;?>" />
            </td>
        </tr>
        <tr>
        <td width="100" align="right" class="key">
                        <label for="checkbox1">
                            <?php echo JText::_( 'I m interested and would like more information' ); ?>:
                        </label>
                    </td>
                    <td>
                        <input class="text_area" type="checkbox" name="checkbox1" id="checkbox1" size="32" maxlength="250" value="<?php echo $this->regvar->checkbox1;?>" />
                    </td>
        </tr>
            <tr>
            <td width="100" align="right" class="key">
                <label for="checkbox2">
                    <?php echo JText::_( 'I would like to join straight away' ); ?>:
                </label>
            </td>
            <td>
          <input class="text_area" type="checkbox" name="checkbox2" id="checkbox2" size="32" maxlength="250" value="<?php echo $this->regvar->checkbox2;?>" />
            </td>
		</tr>
         <tr>
         <td align="right">
                <input class="text_area" type="radio" name="gender" id="gender" value="male" />
                <label for="gender">
                     <?php echo JText::_( 'male' ); ?>
                </label>
     	</td>
            <td>
                <input class="text_area" type="radio" name="gender" id="gender" value="female" />

                <label for="gender">
                     <?php echo JText::_( 'Female' ); ?>
                </label>
          </td>
        </tr>
    </table> 
    </fieldset>
</div>

<div class="clr"></div>

<input type="hidden" name="option" value="com_referfriend" />
<input type="hidden" name="id" value="<?php echo $this->regvar->id; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="editfriendadmin" />
</form>
?>