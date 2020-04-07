<?php
	/**
	* @package oopnotes
	*/

	require_once dirname(__FILE__) . '/vendor/autoload.php';
	use Inc\FinalClass;


	/*
		This is error since it extending a class that is final
		class another extends FinalClass{ 

			public function print()
			{
				echo "printing";
			}
		}
	*/

	$car = new another();

	$car->start();


?>


