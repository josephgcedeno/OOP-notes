<?php

/**
* @package oopnotes
*/
namespace Inc;

use Inc\CompositionFile2;

	/**
 * The Book class models a book with one (and only one) author.
 */
   // The private instance variables

class CompositionFile1{


   private $title;
   private $author = array(); //composition author
   private $price;
   private $qty;
 
   /** Constructs a Book instance with the given author */
   public function __construct( $title , $authors , $price , $qty ) 
   {
      $this->title = $title;
      $this->price = $price;
      $this->qty = $qty;
      $this->setAuthor($authors);
    
   }
   public function setAuthor($authors)
   {
   	  foreach ( $authors as $details ) 
      {
 
    	$this->author [] = new CompositionFile2( $details['author_name'] , $details['author_email'] , $details['author_gender'] );
      }
   }
 
   // Getters and Setters
   /** Returns the name of this book */
   public function getTitle() 
   {
      return $this->title;
   }

   /** Return the Author instance of this book */
   public function getAuthor() 
   {
      return $this->author;  // return member author, which is an instance of the class Author
   }
   /** Returns the price */
   public function getPrice() 
   {
      return $this->price;
   }
   /** Sets the price */
   public function setPrice( $price ) 
   {
      $this->price = $price;
   }
   /** Returns the quantity */
   public function getQty() {
      return $this->qty;
   }
   /** Sets the quantity */
   public function setQty( $qty ) 
   {
      $this->qty = $qty;
   }
 
   /** Returns a self-descriptive String */
   public function toString() 
   {
      $displaydetailsofbook = "The Quantity Available for this book is: ".$this->qty." <br>";
	  $displaydetailsofbook .= "The Price of this book: ".$this->price." <br>";
	  $displaydetailsofbook .= "The authors of ".$this->title.": <br><br>";


	  for( $i = 0 ; $i < count((array)$this->author) ; $i++ ) // count indexes of object in array
      {

      	$displaydetailsofbook.= "Names of author: ".$this->author[$i]->getName()."<br>";
		$displaydetailsofbook.= "Gender of author: ".$this->author[$i]->getGender()."<br>";
      	$displaydetailsofbook.= "Email of author: ".$this->author[$i]->getEmail()."<br><br>";
      }

      return $displaydetailsofbook;
     // var_dump($this->author);  // author.toString()
   }

}