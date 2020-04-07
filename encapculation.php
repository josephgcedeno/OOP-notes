<?php
	/**
	* @package oopnotes
	*/

	require_once dirname(__FILE__) . '/vendor/autoload.php';
	use Inc\Encapsulation;

	$car = new Encapsulation('Toyota','red','tinted');

	$car->setColor('pink'); //updating the origin value of private variable
	echo $car->getColor(); //getting the value of private variable


?>


