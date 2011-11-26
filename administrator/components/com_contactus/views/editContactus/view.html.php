<?php
	defined( '_JEXEC' ) or die( 'Restricted access' );
	jimport( 'joomla.application.component.view' );
	
	class ContactusadminViewEditContactus extends JView
	{
		function display($tpl = null)
		{
			//get the hello
			$trailvar		=& $this->get('Data');
			//$isNew		= ($hello->id < 1);
	 
			//$text = $isNew ? JText::_( 'New' ) : JText::_( 'Edit' );
			$text = JText::_( 'Edit' );
			JToolBarHelper::title(   JText::_( 'Contactus Form' ).': <small><small>[ ' . $text.' ]</small></small>' );
			//JToolBarHelper::save();
			//if ($isNew)  {
				//JToolBarHelper::cancel();
			//} else {
				// for existing items the button is renamed `close`
				//JToolBarHelper::cancel( 'cancel', 'Close' );
			//}
			
			JToolBarHelper::back( 'back', 'index.php?option=com_contactus' );
			
			$trailvar->sourcefulllist = JHTML::_('select.genericList', $trailvar->sourcelist, 'source', '', 'value','text', $trailvar->source );
			
			//echo "<pre>";
			//print_r($trailvar);
	 
			$this->assignRef('trailvar',$trailvar);
	 
			parent::display($tpl);
			
		}
	
	}
?>
