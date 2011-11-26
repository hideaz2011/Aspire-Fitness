<?php
	defined( '_JEXEC' ) or die( 'Restricted access' );
	jimport( 'joomla.application.component.model' );
	class ReferfriendadminModelEditfriendadmin extends JModel
	{
		var $_data;
		function __construct()
		{
			parent::__construct();
			$array = JRequest::getVar('cid',  0, '', 'array');
			$this->setId((int)$array[0]);
		}
		function setId($id)
		{
			$this->_id      = $id;
			$this->_data    = null;
		}
		function &getData()
		{
			if (empty( $this->_data )) {
				$query = ' SELECT * FROM #__referfriend '.'  WHERE id = '.$this->_id;
				$this->_db->setQuery( $query );
				$this->_data = $this->_db->loadObject();
			}
			return $this->_data;
		}
		function store()
		{
			$row =& JTable::getInstance('Referfriend', 'Table');
			$data = JRequest::get( 'post' );
			// for radio button
			if($data['gender'] == "male")  {
			$data['gender'] = "male";
			} else {
				$data['gender'] = "female";
			}

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
			return true;
		}
		function delete()
		{
			$cids = JRequest::getVar( 'cid', array(0), 'post', 'array' );
			$row =& JTable::getInstance('Spa', 'Table');

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