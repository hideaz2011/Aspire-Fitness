<?php 
	defined('_JEXEC') or die('Restricted access');
  ?>
  

  <form action="<?php echo JRoute::_( 'index.php' );?>" method="post" name="adminForm" enctype="multipart/form-data">
    <div id="editcell">
        <table class="adminlist">
        <thead>
            <tr>
            
                <th width="5">
                    <?php echo JText::_( 'ID' ); ?>
                </th>
                
                <th width="20">
    <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->trailinfo ); ?>);" />
				</th>
                
                <th>
                    <?php echo JText::_( 'Firstname' ); ?>
                </th>
                <th>
                    <?php echo JText::_( 'Lastname' ); ?>
                </th>
                <th>
                    <?php echo JText::_( 'Email' ); ?>
                </th>
                <th>
                    <?php echo JText::_( 'Source' ); ?>
                </th>
                
                <th>
                    <?php echo JText::_( 'Description' ); ?>
                </th>
                
                       
        </thead>
       
        <?php
        $k = 0;
        for ($i=0, $n=count( $this->trailinfo ); $i < $n; $i++)
			{
				$row =& $this->trailinfo[$i];
				$checked    = JHTML::_( 'grid.id', $i, $row->id );
				$link = JRoute::_('index.php?option=com_contactus&controller=editContactus&task=edit&cid[]='. $row->id );
				 ?>
            <tr class="<?php echo "row" . $k; ?>">
                <td>
                    <?php echo $row->id; ?>
                </td>
                
                <td>
    			<?php echo $checked; ?>
				</td>
                <td>
                   <a href="<?php echo $link; ?>"><?php echo $row->firstname; ?></a>
                </td>
                <td>
                    <?php echo $row->lastname; ?>
                </td>
                
                <td>
                    <?php echo $row->email; ?>
                </td>
                
                <td>
                    <?php echo $row->source; ?>
                </td>
				
                <td>
                    <?php echo $row->description; ?>
                </td>
				
            </tr>
            <?php
            $k = 1 - $k;
        }
        ?>
        </table>
    </div>
     
    <input type="hidden" name="option" value="com_contactus" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="controller" value="editContactus" />
   
    
    </form>
