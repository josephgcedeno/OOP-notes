<?php
	/**
	* @package oopnotes
	*/

	require_once dirname(__FILE__) . '/vendor/autoload.php';
	use Inc\PolymorphismFile1;
	use Inc\PolymorphismFile2;
	

	


	$circ = new PolymorphismFile1(3); 
	$rect = new PolymorphismFile2(3,4);

	echo $circ -> calcArea().'<br>';
	echo $rect -> calcArea();
?>


