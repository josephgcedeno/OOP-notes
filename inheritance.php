<?php
	/**
	* @package oopnotes
	*/

	require_once dirname(__FILE__) . '/vendor/autoload.php';
	use Inc\Inheritance;
	use Inc\InheritanceEx;
	

	$vehicle = new InheritanceEx( 'pink' , '4wheels'  );
	$motor = new Inheritance( '3' , '100k' , true );
	


	echo $motor->getColor();

?>


