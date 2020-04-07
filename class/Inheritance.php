<?php

/**
* @package oopnotes
*/

namespace Inc;
use Inc\InheritanceEx;

//motor
class Inheritance extends InheritanceEx{

	private $quantity;
	private $cost;
	private $helmet;
	public function __construct( $quantity , $cost , $helmet )
	{
		$this->quantity = $quantity;
		$this->cost = $cost;
		$this->helmet = $helmet;
	}
	public function setQuantity( $quantity )
	{
		$this->quantity = $quantity;
	}
	public function setHelmet( $helmet )
	{
		$this->helmet = $helmet;
	}
	public function setCost( $cost )
	{
		$this->cost = $cost;
	}
	public function getQuantity()
	{
		return $this->quantity;
	}
	public function getHelmet()
	{
		return $this->helmet;
	}
	public function getCost()
	{
		return $this->cost;
	}

}



