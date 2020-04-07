<?php

/**
* @package oopnotes
*/

namespace Inc;


class MethodOverridingFile2{

	public function __construct()
	{
		echo "class instantiated";
	}
	public function carAction( $action )
	{
		$act = '<br>';
		$act .= 'the car is '.$action.'1';
		echo $act;
	}

	
}