<?php

/**
* @package oopnotes
*/

namespace Inc;
use Inc\MethodOverridingFile2;


class MethodOverridingFile1 extends MethodOverridingFile2{

	public function __construct()
	{
		echo "class instantiated";
	}
	public function carAction( $h )
	{
		echo "<br> car is $h";
	}

	
}