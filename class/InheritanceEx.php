<?php

/**
* @package oopnotes
*/

namespace Inc;
//vehicle
class InheritanceEx{
	
	private $color;
	private $wheels;
	
	public function __construct( $color , $wheels )
	{
		$this->color = $color;
		$this->wheels = $wheels;
	}
	public function setColor( $color )
	{
		 $this->color = $color;
	}
	public function setWheels( $wheels )
	{
		 $this->wheels = $wheels;
	}
	public function getColor()
	{

		return $this->color;
	}
	public function getWheels()
	{

		return $this->wheels;
	}

}