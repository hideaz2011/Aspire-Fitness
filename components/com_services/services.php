<?php

defined( '_JEXEC' ) or die( 'Restricted access' );
require_once( JPATH_COMPONENT.DS.'controller.php' );
if($controller = JRequest::getWord('controller')) 
{
	$path = JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php';
	if (file_exists($path)) 
	{
		require_once $path;
	} 
	else 
	{
		$controller = '';
	}
}
$classname    = 'ServicesController'.$controller;
$controller   = new $classname( );
$controller->execute( JRequest::getWord( 'task' ) );
$controller->redirect();

?>