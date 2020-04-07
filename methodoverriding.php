<?php
	/**
	* @package oopnotes
	*/

	require_once dirname(__FILE__) . '/vendor/autoload.php';
	use Inc\MethodOverridingFile1;
	


	$object = new MethodOverridingFile1(); 
	

	$object->carAction('stoping');
?>


