<?php

/**
* @package oopnotes
*/

namespace Inc;


class MethodOverloading{

	public function __construct()
	{
		echo "class instantiated";
	}
	public function carAction( $action , $action2 = null)
	{
		$act = '<br>';
		$act .= 'the car is '.$action;
		$act .= ( $action2 ) ? " and $action2" : '';
		echo $act;
	}

	
}