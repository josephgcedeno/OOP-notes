<?php

/**
* @package oopnotes
*/

namespace Inc;
//car
class Encapsulation{

	private $color; 
	private $brand;
	private $designwindshield;

	public function __construct( $brand , $color , $designwindshield )
	{
		$this->brand = $brand;
		$this->color = $color;
		$this->designwindshield= $designwindshield;
	}
	public function setColor( $color )
	{
		 $this->color = $color;
	}
	public function setDesignWS( $designwindshield )
	{
		 $this->designwindshield = $designwindshield;
	}
	public function setBrand( $brand )
	{
		 $this->brand = $brand;
	}
	public function getColor()
	{

		return $this->color;
	}
	public function getDesignWS()
	{
		return $this->designwindshield;
	}
	public function getBrand()
	{
		return $this->brand;
	}
}