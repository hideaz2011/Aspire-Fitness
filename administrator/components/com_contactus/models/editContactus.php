<?php
	defined( '_JEXEC' ) or die( 'Restricted access' );
	jimport( 'joomla.application.component.model' );
	
	class ContactusadminModelEditContactus extends JModel {
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
			
			return $this->_data;
		}
		
		
		function delete()
		{
			$cids = JRequest::getVar( 'cid', array(0), 'post', 'array' );
			$row =& JTable::getInstance('contactus', 'Table');
		 
			foreach($cids as $cid) {
				if (!$row->delete( $cid )) {
					$this->setError( $row->getErrorMsg() );
					return false;
				}
			}
		 
			return true;
		}
			
	}
?>