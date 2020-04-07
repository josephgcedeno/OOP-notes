<?php

/**
* @package oopnotes
*/
namespace Inc;

abstract class car{

	public abstract function engineStart();
}
class AbstractClass extends car{

	public function __construct()
	{
		echo "abstract class initiated";
	}
	
	public function engineStart(){
		return "Engine Starting";
	}

}