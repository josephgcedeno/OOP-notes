<?php

/**
* @package oopnotes
*/

namespace Inc;

class GetterAndSetter 
{
	private $color;
	private $wheels;
	private $brand;

	public function getColor()
	{
		return $this->color;
	}
	public function setColor( $colorPassed )
	{
		$this->color = $colorPassed;
	}
}





?>