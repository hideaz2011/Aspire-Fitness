<?php
	
	defined( '_JEXEC' ) or die( 'Restricted access' );
	jimport( 'joomla.application.component.view');
	
	
	
	class ContactusViewContactus extends JView
	{
		function display($tpl = null)
    	{
			$trailvar		=& $this->get('Data');
					
			$trailvar->sourcefulllist = JHTML::_('select.genericList', $trailvar->sourcelist, 'source', '', 'value','text', $trailvar->source );
			
			$this->assignRef('trailvar',$trailvar);
	
			parent::display($tpl);
		}
				
	}

?>