<?php
	defined( '_JEXEC' ) or die( 'Restricted access' );
	jimport( 'joomla.application.component.model' );
	class referfriendModelreferfriend extends JModel
	{
		function store()
		{
			$row =& JTable::getInstance('Referfriend', 'Table');
			$data = JRequest::get( 'post' );
			if(isset($data['checkbox1'])) {
				$data['checkbox1'] = 1;
			} else {
				$data['checkbox1'] = 0; 
			}
			if(isset($data['checkbox2'])) {
				$data['checkbox2'] = 1;
			} else {
				$data['checkbox2'] = 0; 
			}
			if (!$row->bind($data)) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}
			if (!$row->check()) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}
		 	if (!$row->store()) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}
			return true;
		}
	}
?>