<?php
	defined('_JEXEC') or die();
	jimport( 'joomla.application.component.view' );
	class ReferfriendadminViewReferfriendadmin extends JView
	{
		function display($tpl = null)
		{
			JToolBarHelper::title( JText::_( 'Referfriendadmin Manager' ), 'generic.png' );
			JToolBarHelper::deleteList();
			JToolBarHelper::editListX();
			JToolBarHelper::addNewX();
			$items =& $this->get( 'Data');
			$this->assignRef( 'items', $items );
			parent::display($tpl);
		}
	}
?>