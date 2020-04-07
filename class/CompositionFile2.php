<?php

/**
* @package oopnotes
*/

namespace Inc;

//class author
class CompositionFile2{

   // The private instance variables
   private $name;
   private $email;
   private $gender;   // 'm' or 'f'
 
   /** Constructs a Author instance with the given inputs */
   public function __construct( $name ,  $email , $gender ) {
      $this->name = $name;
      $this->email = $email;
      $this->gender = $gender;
   }
 
   // The public getters and setters for the private instance variables.
   // No setter for name and gender as they are not designed to be changed.
   /** Returns the name */

   public function getName() {
      return $this->name;
   }
   /** Returns the gender */
   public function getGender() {
      return $this->gender;
   }
   /** Returns the email */
   public function getEmail() {
      return $this->email;
   }
   /** Sets the email */
   public function setEmail($email) {
      $this->email = $email;
   }
 
   /** Returns a self-descriptive String */
   public function toString() {
      return $this->name . " (" . $this->gender . ") at " . $this->email;
   }
}