<?php
	/**
	* @package oopnotes
	*/

	require_once dirname(__FILE__) . '/vendor/autoload.php';
	use Inc\CompositionFile1;


	// To use composition

	// We can say, In 1 book there could be more authors so we assign it to 2d Array.

	//Instantiate the book then pass the arguements required. The second arguement is the arguement needed by the author and we assign it by array. class in our case we call it CompositionFile2.
	$composition = new CompositionFile1(
		'The OOP notes',
		[
			[
				'author_name'=>'Joseph' , 
				'author_email' => 'josephgcedeno@gmail.com',
				'author_gender'=> 'M'
		 	],
		 	[
				'author_name'=>'Nicole' , 
				'author_email' => 'itsnicoled@gmail.com',
				'author_gender'=> 'F'
		 	]

		 ] ,
		50,
		13
		 );
	
	//First approach printing the details of book
	$authors = $composition->getAuthor();// for the composite class

	//$composition->setPrice(500); If we wanna update the price use the set function
	echo "The Quantity Available for this book is: ".$composition->getQty()." <br>";
	echo "The Price of this book: ".$composition->getPrice()." <br>";
	echo "The authors of ".$composition->getTitle().": <br><br>";
	for( $i = 0 ; $i < count((array)$authors) ; $i++ ) // count indexes of object in array
	{
		//Since name , gender , and email of author is private variable. We should use public getter so we can get the details.
		echo "Names of author: ".$authors[$i]->getName()."<br>"; 
		echo "Gender of author: ".$authors[$i]->getGender()."<br>";
		echo "Email of author: ".$authors[$i]->getEmail()."<br><br>";
	}





	//Second approach printing the details of book
	echo $composition->toString();


?>