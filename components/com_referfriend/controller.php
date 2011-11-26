<?php
	defined( '_JEXEC' ) or die( 'Restricted access' );
	jimport('joomla.application.component.controller');
	class referfriendController extends JController
	{
		function display()
		{
			parent::display();
		}
		function __construct()
		{
			parent::__construct();
		}
		function save()
		{
			$model = $this->getModel('referfriend');
			if ($model->store()) {
				$msg = JText::_( 'referfriend Saved!' );
			} else {

				$msg = JText::_( 'Error Saving record' );
			}
		 $link = 'index.php?option=com_referfriend';
			$this->setRedirect($link, $msg);
		}
	}
?>