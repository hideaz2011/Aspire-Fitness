<?php 

defined('_JEXEC') or die('Restricted access');
$editor =& JFactory::getEditor();
?>
	
<div class="prepend-2 span-20 append-2"> 
        	<form action="index.php" method="post" name="adminForm" id="adminForm">
            	
                	<legend align="center">ContactUs Details</legend>
                    
                        <div class="span-8"> 
                        	<p class="alignment">FirstName:</p>
                        </div>
                        
                        <div class="span-12 last">
                        	<input type="text" name="firstname" id="firstname" value=""  />
                        </div>
                        
                        <div class="span-8"> 
                        	<p class="alignment">LastName:</p>
                        </div>
                        
                        <div class="span-12 last">
                        	<input type="text" name="lastname" id="lastname" value=""/>
                        </div>
                        
                       <div class="span-8"> 
                        	<p class="alignment">E-mail:</p>
                        </div>
                        
                        <div class="span-12 last">
                        	<input type="text" name="email" id="email" value="" />
                        </div>
                        
                        <div class="span-8"> 
                        	<p class="alignment">Source:</p>
                        </div>
                        
                        <div class="span-12 last">
                       		 <?php echo $this->trailvar->sourcefulllist; ?>
                        </div>
                        
                        <div class="span-8">
                         	<p class="alignment">Description:</p>
						</div>
						<div class="span-12 last">
							<?php echo $editor->display( 'description', $this->trailvar->description ,'100%', '150', '40', '50' ) ;?>
 
                        </div>
                        
                        <div class="prepend-8 span-10 append-3 last">
                  			<input type="submit" id="button"	value="Submit"/>
						</div>                   
           
            <input type="hidden" name="option" value="com_contactus"/>
            
            <input type="hidden" name="id" value="<?php echo $this->trailvar->id; ?>" />
            
            <input type="hidden" name="task" value="save"/>
            
            <input type="hidden" name="controller" value="contactus" />
</form>
 