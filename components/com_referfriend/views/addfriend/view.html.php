<?php
	defined( '_JEXEC' ) or die( 'Restricted access' );
	jimport( 'joomla.application.component.view');
	class referfriendViewreferfriend extends JView
	{
		function display($tpl = null)
		{
			$model = &$this->getModel();
			$name = $model->getname();
			$this->assignRef( 'name', $name );	 
			parent::display($tpl);
		}
	}
?>