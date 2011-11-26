<?php
	defined('_JEXEC') or die('Restricted access');
	jimport( 'joomla.application.component.model' );
	class ReferfriendadminModelReferfriendadmin extends JModel
	{
		var $_data;
		var $_senddata;
		function _buildQuery()
		{
			$query = ' SELECT * ' . ' FROM #__referfriend ';
			return $query;
		}
		function getData()
		{	
			global $option, $mainframe;
			if (empty( $this->_data ))
			{
			$limit = 10;
			$limitstart = JRequest::getVar('limitstart', 0);
			$db =& JFactory::getDBO();
			$query = "SELECT count(*) FROM #__referfriend";
			$db->setQuery( $query );
			$total = $db->loadResult();
			$query = $this->_buildQuery();
			$db->setQuery( $query, $limitstart, $limit );
			$this->_data = $db->loadObjectList();
				//$this->_data = $this->_getList( $query );
				if ($db->getErrorNum())
				{
					echo $db->stderr();
					return false;
				}
			jimport('joomla.html.pagination');
			$pageNav = new JPagination($total, $limitstart, $limit);
				$this->_senddata[0] = $this->_data;
				$this->_senddata[1] = $pageNav;
				$this->_senddata[2] = $option;
			}
			return $this->_senddata;
		}
	}
?>