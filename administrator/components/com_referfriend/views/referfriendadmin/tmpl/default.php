<?php
	defined('_JEXEC') or die('Restricted access'); ?>
<form action="index.php" method="post" name="adminForm">
<div id="editcell">
    <table class="adminlist">
    <thead>
        <tr>
				<th width="5">
					<?php echo JText::_( 'id' ); ?>
				</th>
				<th width="5">
					<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items[0] ); ?>);" />
				</th>
				<th>
					<?php echo JText::_( 'coach name' ); ?>
				</th>
				<th>
					<?php echo JText::_( 'Phone No' ); ?>
				</th>
				<th>
					<?php echo JText::_( 'address' ); ?>
				</th>
				<th>
					<?php echo JText::_( 'post_code' ); ?>
				</th>
				<th>
					<?php echo JText::_( 'name' ); ?>
				</th>
				<th>
					<?php echo JText::_( 'Phone No' ); ?>
				</th>
				<th>
					<?php echo JText::_( 'referee name' ); ?>
				</th>
				<th>
					<?php echo JText::_( 'referee phone_no' ); ?>
				</th>
				<th>
					<?php echo JText::_( 'referee organisation' ); ?>
				</th>

				<th>
					<?php echo JText::_( 'description ' ); ?>
				</th>
				<th>
					<?php echo JText::_( 'Gender' ); ?>
				</th>
				<th>
					<?php echo JText::_( 'interest' ); ?>
				</th>
				<th>
					<?php echo JText::_( 'join' ); ?>
				</th>
        </tr>            
    </thead>
    <?php
    $k = 0;
    for ($i=0, $n=count( $this->items[0] ); $i < $n; $i++)
    {
		$row =& $this->items[0][$i];
        $checked  = JHTML::_( 'grid.id', $i, $row->id );
		$link = JRoute::_( 'index.php?option=com_referfriend&controller=Editfriendadmin&task=edit&cid[]='. $row->id );
		?>
        <tr class="<?php echo "row" . $k; ?>">
			<td>
				<?php echo $row->id; ?>
			</td>
			<td>
				<?php echo $checked; ?>
			</td>
			<td>
			<a href="<?php echo $link; ?>"><?php echo $row->coach_name; ?></a>
			</td>
			<td>
			<?php echo $row->coach_phone_no; ?></a>
			</td>
			<td>
			<?php echo $row->address; ?></a>
			</td>
			<td>
			<?php echo $row->post_code; ?></a>
			</td>
			<td>
			<?php echo $row->name; ?></a>
			</td>
			<td>
			<?php echo $row->phone_no; ?></a>
			</td>
			<td>
			<?php echo $row->referee_name; ?></a>
			</td>
			<td>
			<?php echo $row->referee_phone_no; ?></a>
			</td>
			<td>
			<?php echo $row->referee_organisation; ?></a>
			</td>
			<td>
			<?php echo $row->description; ?></a>
			</td>
			<td>
			<?php echo $row->gender; ?></a>
			</td>
			<td>
			<?php echo $row->checkbox1; ?></a>
			</td>
			<td>
			<?php echo $row->checkbox2; ?></a>
			</td>
        </tr>
        <?php
        $k = 1 - $k;
    }
    ?>
    <tfoot>
    <td colspan="7"><?php echo $this->items[1]->getListFooter(); ?></td>
    </tfoot>	
    </table>
</div>
<input type="hidden" name="option" value="com_referfriend" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="editfriendadmin" />
</form>
?>