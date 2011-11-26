<?php
	defined('_JEXEC') or die('Restricted access');
	class TableContactus extends JTable
	{
		var $id = null;
		var $firstname = null;
		var $lastname = null;
		var $email = null;
		var $source = null;
		var $description = null;
								
		function __construct( &$db ) 
		{
			parent::__construct('#__contacts', 'id', $db);
		}
	
	}
?>