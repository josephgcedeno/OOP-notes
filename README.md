# <p style="color:#e57373">Object Oriented Programming <strong>Notes</</p>

- **<b style="color:#e57373">Abstraction</b> :** Representation of complexity. 
 _Eg. when you represent the cars property and behavior. The car has property of color, brand and type. It has a behavior of accelarating and breaking_

- **<b style="color:#e57373"> Abstract Class & abstract function </b> :** An abstract class is a partially defined class that cannot be instantiated. The purpose of an abstract class is to define some common behavior that can be inherited by multiple subclasses, without implementing the entire class. In other word, same to interface. Main difference between two is abstract function can add block of code while interface is just an contract of functions. An abstract function means that if the parent function is abstract then the child class must redelcare the abstract function. When using an abstract class therefore abstract function is required. [Source.](https://www.brainbell.com/tutorials/php/abstract-interface-composition-aggregation.html)


- **<b style="color:#e57373"> Method Chaining/Parameter idiom</b> :** This means calling simultaneously the functions. Function by function of execution. Returning the object itself in order for the result to be called for another method. [Source.](https://stackoverflow.com/questions/1103985/method-chaining-why-is-it-a-good-practice-or-not)


- **<b style="color:#e57373"> Classes</b> :** The classes that holds the variables / property and method / behaviour.

- **<b style="color:#e57373"> Interface. </b> :** The classes that holds the variables / property and method / behaviour.

- **<b style="color:#e57373">Objects </b>:** When Instantiating the class it becomes object.

- **<b style="color:#e57373">Inheritance:** Is when you extends the class

- **<b style="color:#e57373">Composition / Aggregation</b>:** Is another way to use the class to another class like inheritance. which is composed of existing classes. [source](https://www3.ntu.edu.sg/home/ehchua/programming/java/J3b_OOPInheritancePolymorphism.html)


- **<b style="color:#e57373">Polymorphism</b>:** Same functionality of method must be named the same, in order to apply it we either use interface or abstract class .Is when solving 1 problem but with different approaches. _Eg. you have a smartphone for communication. The communication mode you choose could be anything. It can be a call, a text message, a picture message, mail, etc. So, the goal is common that is communication, but their approach is different. This is called Polymorphism. [source 1](https://www.webopedia.com/TERM/P/polymorphism.html) [source 2](https://phpenthusiast.com/object-oriented-php-tutorials/polymorphism-in-php)_


- **<b style="color:#e57373">Encapsulation</b>:** Is a way to privatize the variables and providing access to them in a public method (_Getter and Setter_).  It’s a protective barrier that keeps the data and code safe within the class itself. This way, we can re-use objects like code components or variables without allowing open access to the data system-wide. [source](https://stackify.com/oops-concepts-in-java/)
	- **<b style="color:#e57373">Getter function</b>:** Will get the value of private variable.
	- **<b style="color:#e57373">Setter function</b>:** Will update the value of private variable.

- **<b style="color:#e57373">Method Overriding </b>:** Is the ability of the child class to override the particular method of the parent class.  [source](https://stackify.com/oops-concepts-in-java/)

- **<b style="color:#e57373">Method Overloading </b>:** Is the same method but performs different action. This will dependend to the arguement pass.  [source](https://stackify.com/oops-concepts-in-java/)

- **<b style="color:#e57373">Static variable or function </b>:** Is shared by all instances of a class. Meaning you can use the property or function without instantiating.  [source](https://www.quora.com/Object-Oriented-Programming-What-is-a-static-method)

- **<b style="color:#e57373">Final Class</b>:** When you don't want other class to extend your class.  


- **<b style="color:#e57373">3 Types/Ways of Accessing variable and method </b>:**
	
	 - **<b style="color:#e57373">1 </b>:**  Instantiating the class and making it object.

	 - **<b style="color:#e57373">2 </b>:**  Within the class itself can access the property and method.

	 - **<b style="color:#e57373">3 </b>:**  When extending the class.



- **<b style="color:#e57373">Public property & method </b>:**  All public variable and method can be accessable anywhere.` Given the 3 type of access. All 3 are possible way to access the property and method of the class. `


- **<b style="color:#e57373">Protected property & method </b>:**  The protected variable or method can only be access within th class or when extending the class.` Given the 3 type of access. 2 and 3 are possible way to access the property and method of the class. `


- **<b style="color:#e57373">Private property & method </b>:**  The Private variable or method can only be access within the class itself. But if you apply encapsulation then you can access the private variables.` Given the 3 type of access. 2 is the only possible way to access the property and method of the class. ` 


