<?php
	/**
	* @package oopnotes
	*/

	require_once dirname(__FILE__) . '/vendor/autoload.php';
	use Inc\AbstractClass;


	$car = new AbstractClass();
	$start=$car->engineStart();

	echo '<br>'.$start;


