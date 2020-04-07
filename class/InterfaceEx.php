<?php

/**
* @package oopnotes
*/
namespace Inc;


interface Car { 
   public function startEngine(); 
   public function stopEngine(); 
}  

class InterfaceEx implements Car{

   public function startEngine()
   {
   		echo "Starting Engine";
   } 

   public function stopEngine()
   {
   		echo "Stoping Engine";
   } 

}

