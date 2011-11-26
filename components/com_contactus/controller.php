<?php
	defined( '_JEXEC' ) or die( 'Restricted access' );
 
	jimport('joomla.application.component.controller');
	
	class ContactusController extends JController
	{
		
		 
		function display() {
			parent::display();
		}
		
		function __construct()
		{
			parent::__construct();
	 
			// Register Extra tasks
			$this->registerTask( 'add','' );
			
		}
		
		function save()
		{
			$model = $this->getModel('contactus');
		 
			if ($model->store()) {
				$msg = JText::_( 'Contactus Saved!' );
			} else {
				
				$msg = JText::_( 'Error Saving Contactus' );
			}
		 
	 			
			// Check the table in so it can be edited.... we are done with it anyway
			$link = 'index.php?option=com_contactus';
			$this->setRedirect($link, $msg);
		}
	}
?>