<?php
	defined( '_JEXEC' ) or die( 'Restricted access' );
	jimport( 'joomla.application.component.model' );
	
	class ContactusModelContactus extends JModel {
		var $_data;
		
		
		function __construct()
		{
			parent::__construct();
		 	
			$array = JRequest::getVar('cid',  0, '', 'array');
			
			$this->setId((int)$array[0]);
		}
		
		function setId($id)
		{
			// Set id and wipe data
			$this->_id      = $id;
			$this->_data    = null;
		}
		
		function &getData()
		{
			// Load the data
			if (empty( $this->_data )) {
				$query = ' SELECT * FROM #__contacts '.'  WHERE id = '.$this->_id;
				$this->_db->setQuery( $query );
				$this->_data = $this->_db->loadObject();
				
			}
			
			$this->_data->sourcelist = array(
			'0' => array('value' => 'internet', 'text' => 'internet'),
			'1' => array('value' => 'friends', 'text' => 'friends'),
			'2' => array('value' => 'email', 'text' => 'email'),
			'3' => array('value' => 'sms', 'text' => 'sms')
			);
			
			
			
			//echo "<pre>";
				//print_r($this->_data);
			//if (!$this->_data) {
				//$this->_data = new stdClass();
				//$this->_data->id = 0;
				//$this->_data->greeting = null;
			//}
			return $this->_data;
		}
		
		function store()
		{
			$row =& JTable::getInstance('contactus', 'Table');
			//$row =& $this->getTable();
			
			$data = JRequest::get( 'post' );
			
			//print_r($data);
			//exit();
			
			
			if (!$row->bind($data)) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}
		 
			// Make sure the hello record is valid
			if (!$row->check()) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}
		 
			// Store the web link table to the database
			if (!$row->store()) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}
			
			//echo $this->_db->getErrorMsg();
			//exit();
				 
			return true;
		}
			
	}
?>