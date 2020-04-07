<?php

/**
* @package oopnotes
*/
namespace Inc;
class MethodChaining { 

	private  $a; 
	private  $b; 

	public function __construct() 
	{ 
		echo "Calling The Constructor"; 
	} 

	public function setint( $a ) 
	{ 
		$this->a = $a; 
		return $this; 
	} 

	public function setfloat( $b ) 
	{ 
		$this->b = $b; 
		return $this; 
	} 

	public function display() 
	{ 
		echo "<br> Display=" . $this->a . " " . $this->b; 
	} 
} 

