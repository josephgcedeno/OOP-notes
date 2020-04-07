<?php
	/**
	* @package oopnotes
	*/

	require_once dirname(__FILE__) . '/vendor/autoload.php';
	use Inc\StaticVariableOrFunction;
	
	//TO ACCESS STATIC VARIABLE
	$counter = StaticVariableOrFunction::$count=1;



	//TO ACCESS STATIC METHOD
	StaticVariableOrFunction::getCount();


	for( $i = 1 ; $i <= 5 ; $i++ )
	{
		
		StaticVariableOrFunction::$count=$i;
		$get = StaticVariableOrFunction::getCount();

		echo 'The value of count variable '. $get.' <br>';

	}
?>


