<?php
	/**
	* @package oopnotes
	*/

	require_once dirname(__FILE__) . '/vendor/autoload.php';
	use Inc\MethodChaining;
	

	// Driver code 


	// This is the "method chaining in php". 
	// for some reason i have to create an object to method chaining.

	$object = new MethodChaining(); 
	$object->setInt(10)->setFloat(1.1)->display();
?>


