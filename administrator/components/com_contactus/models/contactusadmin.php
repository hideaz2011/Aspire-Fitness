<?php
	
	defined('_JEXEC') or die();
 
	( 'joomla.application.component.view' );
	
	class ContactusadminModelContactusadmin extends JModel
	{
			var $_data;
			function _buildQuery()
			{
				$query = ' SELECT * ' . ' FROM #__contacts';
				return $query;
			}
	
			function getData()
			{
				
				if (empty( $this->_data ))
		
				{
					$query = $this->_buildQuery();
					$this->_data = $this->_getList( $query );
				}
		 
			// echo "<pre>";
			// print_r($this->_data);
			// exit();
		
				return $this->_data;
			}
			
			
		
	}
?>