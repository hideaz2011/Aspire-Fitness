<?php
	defined('_JEXEC') or die();
 
	jimport( 'joomla.application.component.view' );
	

	
	class ContactusadminViewContactusadmin extends JView
	{
		function display($tpl = null)
		{
			
			
			JToolBarHelper::title( JText::_( 'Contactus Manager' ), 'generic.png' );
			JToolBarHelper::deleteList();
			JToolBarHelper::editListX();
			//JToolBarHelper::addNewX();
	 
			
			$trailinfo =& $this->get( 'Data');
			
			$this->assignRef( 'trailinfo', $trailinfo );
			
			parent::display($tpl);
		}
		
	}
?>	