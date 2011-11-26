<?php
	defined( '_JEXEC' ) or die( 'Restricted access' );
	class ContactusadminControllerEditContactus extends ContactusadminController
	{
		function __construct()
		{
			parent::__construct();
	 
			// Register Extra tasks
			$this->registerTask( '','edit' );
			
		}
		
		function edit()
		{
			JRequest::setVar( 'view', 'editContactus' );
			JRequest::setVar( 'layout', 'form'  );
			JRequest::setVar('hidemainmenu', 1);
	 
			parent::display();
		}
		
		function remove()
		{
			$model = $this->getModel('editContactus');
			if(!$model->delete()) {
				$msg = JText::_( 'Error: One or More Contactus Could not be Deleted' );
			} else {
				$msg = JText::_( 'Contactsu(s) Deleted' );
			}
		 
			$this->setRedirect( 'index.php?option=com_contactus', $msg );
		}
		
			
	}
?>