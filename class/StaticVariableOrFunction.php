<?php

/**
* @package oopnotes
*/

namespace Inc;


class StaticVariableOrFunction{
	
    static $count; 
      
    public static function getCount() 
    { 
        return self::$count++; 
    } 
}