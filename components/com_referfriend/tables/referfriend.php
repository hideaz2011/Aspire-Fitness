<?php
	defined('_JEXEC') or die('Restricted access');
	class TableReferfriend extends JTable
	{
		var $id = null;
		var $coach_name = null;
		var $coach_phone_no = null;
		var $address = null;
		var $post_code = null;
		var $name = null;
		var $phone_no = null;
		var $referee_name = null;
		var $referee_phone_no = null;
		var $referee_organisation = null;
		var $description = null;
		var $gender = null;							
		var $checkbox1 = null;							
		var $checkbox2 = null;							
		function __construct( &$db ) 
		{
			parent::__construct('#__referfriend', 'id', $db);
		}
	}
?>