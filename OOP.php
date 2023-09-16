<?php

// Object-Oriented Programming (OOP) Explanation 

// Define a class called AppleDevice
class AppleDevice {
    // Public properties of AppleDevice
    public $ram;
    public $inch;
    public $space;
    public $color;
    public $Ownername;

    // We've created a class called AppleDevice and added 4 properties.
    // Properties in a class can be public (as in this case), private, or protected.

    const OWNERNAME = 5;
    // We made a constant.
    // Note: It is preferable to write constant names in capital letters.

    /* This is a constructor method - it runs when an object is created.
    public function __construct() {
    Initialize the properties with default values
        $this->ram = "";
        $this->inch = "";
        $this->space = "";
        $this->color = "";
        $this->Ownername = "";
    }*/

    // Method to simulate a double home button press
    public function mobileinfo($r,$l,$s,$c,$n){
        $this->ram = $r;
        $this->inch = $l;
        $this->space = $s;
        $this->color = $c;
        $this->Ownername = $n;
    }
    
    public function doubleHomePress() {
        // This is a method (function) inside the class called "doubleHomePress".
        echo "You are not allowed to use this function <br>";
    }

    // Method to get device information
    public function getinfo() {
        // This is another method called "getinfo".
        // It displays information about the phone's RAM.
        echo "Your phone RAM is " . $this->ram . "<br>";
    }
    // The keyword "$this" is a pseudo-variable that refers to the object's properties.

    // Method to set the owner's name based on its length
    // final here is a word that encapsulate the function which means you can't edit anything in another classes

    final public function Ownername($owner) {
        // This method, "Ownername," takes a parameter called "$owner".
        // It checks the length of the owner's name and provides a message based on its length.
        if (strlen($owner) < self::OWNERNAME) {
            // To use the constant, we write the word "self" followed by "::".
            echo "Your Name can't be set <br>";
        } else {
            echo "Your name has been set <br>";
        }
    }

    // Additional properties for the device
    public $price;
    public $year;
    public $processor;

    // Method to add more information about the device
    public function addinfo($p, $y, $pro) {
        // This function contains three arguments.
        // It identifies the properties with the provided arguments.
        $this->price = $p;
        $this->year = $y;
        $this->processor = $pro;
    }

    // Encapsulation explanation 
//Encapsulation restricts direct access to some of an object's components, 
//and it prevents the accidental modification of data, thus ensuring data integrity and security.

    private $lock ;

    public function changelock($lo){
        $this->lock = sha1($lo);

    

    }
    // here we use the visability mark private 
    // private is used to encapsulate function ;
    //Private: Members are only accessible within the class itself. They cannot be accessed directly from outside the class.



}

// Create an instance of the AppleDevice class
$iphone6 = new AppleDevice();

// Here, we create an object called "iphone6" from the "AppleDevice" class.
// We haven't set any initial values for properties, so they are empty by default.

// Set values for the properties of the "iphone6" object.



$iphone6 -> mobileinfo('5GB', '6 incehs', "32 Gb", "goold", " Mohamed");
// We set values for the properties using the "->" operator.

// Call the "doubleHomePress" and "getinfo" methods of the "iphone6" object.
$iphone6->doubleHomePress();
$iphone6->getinfo();

// Calling the "Ownername" method with an argument.
$iphone6->Ownername("Mohamed");

// Calling the "addinfo" method to add additional information.
$iphone6->addinfo("500 dollars", "2012", "Snapdragon");


$iphone6 -> changelock("Mohamed@SEDEEK");
// calling the private property by the function changelock
// Display detailed information about the object


//Inheritance explanation 
//Inheritance in OOP = When a class derives from another class.

class Sony extends AppleDevice{

// Sony is inherited from Appledevice 
    public $camera = "25MB";
    public $ram = "6 Gb";

    //Add another property


}

$Sony = new Sony(); // Create an instance of the Sony class
$Sony -> mobileinfo('4GB', '5incehs', "32 Gb", "black", "Memo");


$Sony->doubleHomePress();

$Sony->getinfo();
$Sony->addinfo("280 dollars", "2015", "Snapdragon6");
$Sony -> changelock("Mohamed@");




echo '<pre>';
print_r($iphone6);
print_r($Sony);
echo '</pre>';



/**
 * Abstraction Explanation:
 *
 * Abstraction is the concept of hiding complex implementation details and showing only
 * the necessary features of an object. In this code, we use an abstract class "Vehicle"
 * to demonstrate abstraction.
 */

// Define an abstract class called Vehicle
abstract class Vehicle {
    // Properties
    public $make;
    public $model;

    // Constructor
    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    // Abstract Method Declaration
    abstract public function start();

    // Abstract methods are meant to be overridden by subclasses.
}

// Define a subclass Car that extends Vehicle
class Car extends Vehicle {
    // Implement the abstract method start for a car
    public function start() {
        echo "Starting the $this->make $this->model car.";
    }
}

// Define a subclass Motorcycle that extends Vehicle
class Motorcycle extends Vehicle {
    // Implement the abstract method start for a motorcycle
    public function start() {
        echo "Starting the $this->make $this->model motorcycle.";
    }
}

// Create instances of Car and Motorcycle
$myCar = new Car("Toyota", "Camry");
$myMotorcycle = new Motorcycle("Honda", "CBR600");

// Call the start method for each vehicle
$myCar->start(); // Output: Starting the Toyota Camry car.
echo "<br>";
$myMotorcycle->start(); // Output: Starting the Honda CBR600 motorcycle.
echo '<pre>';
print_r($myCar);
print_r($myMotorcycle);
echo '</pre>';


//polymorphism :Polymorphism allows objects of different classes to be treated as objects of a common superclass.



// Define a class called Animal
class Animall {
    // Method to make the animal sound
    public function makeSound() {
        return "Animal makes a sound";
    }
}

// Define a subclass Dog that extends Animal
class Dog extends Animall {
    // Override the makeSound method for a dog
    public function makeSound() {
        return "Dog barks";
    }
}

// Define a subclass Cat that extends Animal
class Cat extends Animall {
    // Override the makeSound method for a cat
    public function makeSound() {
        return "Cat meows";
    }
}

// Define a function that takes an Animal object and makes it sound
function animalMakesSound(Animall $animal) {
    return $animal->makeSound();
}

// Create instances of Dog and Cat
$dog = new Dog();
$cat = new Cat();

// Call the animalMakesSound function with different animals
echo animalMakesSound($dog); // Output: Dog barks
echo "<br>";
echo animalMakesSound($cat);
 // Output: Cat meows
// Define a class called Animal
class Animal {
    // Properties
    public $name;
    public $species;

    // Constructor Method
    public function __construct($name, $species) {
        // This constructor method takes two parameters: $name and $species.

        // Inside the constructor, we initialize the object's properties with the values provided.
        $this->name = $name;
        $this->species = $species;

        // The keyword "$this" refers to the current object, which is being created.
        // So, $this->name and $this->species represent the properties of the object.

        // This code is automatically executed when an object of the Animal class is created.
    }

    // Method to make the animal sound
    public function makeSound() {
        return "Animal makes a sound";
    }
}

// Create an instance of the Animal class and pass values to the constructor
$lion = new Animal("Simba", "Lion");

// When we create the $lion object, the constructor method is automatically called.
// The values "Simba" and "Lion" are passed to the constructor to initialize the $name and $species properties.

// Now, $lion->name is "Simba" and $lion->species is "Lion".

// Call the makeSound method for the $lion object
$sound = $lion->makeSound();

// Output the result
echo "$lion->name ($lion->species) says: $sound"; // Output: Simba (Lion) says: Animal makes a sound


class MyClass {
    public function __call($method, $arguments) {
        echo "Calling method '$method' with arguments: " . implode(', ', $arguments) . "<br>";
    }
}

$obj = new MyClass();

// Calling a non-existing method 'exampleMethod' on the object.
$obj->exampleMethod("arg1", "arg2", "arg3");



//__get and __set
class Person {
    private $name;

    public function __get($property) {
        if ($property === "name") {
            return "This is a private property.";
        }
    }
}

$person = new Person();
echo $person->name; // Calls __get method for "name" property
// Output: This is a private property.

class Man {
    private $name;

    public function __set($property, $value) {
        if ($property === "name") {
            $this->namee = strtoupper($value);
        }
    }
}

$person = new Man();
$person->name = "John"; // Calls __set method for "name" property
//echo $person->name; // Output: JOHN


//Static methods can be called directly - without creating an instance of the class first.


// Define a class called "stat"
class stat {
    // Declare a public static property called "method" and initialize it
    public static $method = " <br> it works";

    // Declare a public static method called "sayhello"
    public static function sayhello() {
        // This method returns the string "hello"
        return "<br> hello";
    }
}

// Access the static property "method" of the "stat" class
echo stat::$method;
// Output: <br> it works

// Call the static method "sayhello" of the "stat" class
echo stat::sayhello();
// Output: <br> hello

?>

<?php
//traits 

//traits enable you to create reusable code snippets that can be used in multiple classes independently


// Define a trait for hair-related methods

// Define a trait for hair-related methods
trait Hair {
    public function hasYellowHair() {
        echo "He has yellow hair. ";
        return $this; // Return the current object for method chaining
    }
}

// Define a trait for eye-related methods
trait Eyes {
    public function hasBlueEyes() {
        echo "He has blue eyes. ";
        return $this; // Return the current object for method chaining
    }
}

// Define a class
class Blonde {
    public function isBlonde() {
        echo "This person is blonde. ";
    }

    // Use the traits in the class
    use Hair, Eyes;
}

// Create an instance of the Blonde class
$person = new Blonde();

// Use method chaining to describe the person
$person->hasYellowHair()->hasBlueEyes();


echo '<pre>';print_r($person); echo'</pre>';





// Define a trait with a method name conflict
trait TraitA {
    public function speak() {
        echo "TraitA speaking. ";
        return $this;
    }
}

// Define another trait with the same method name
trait TraitB {
    public function speak() {
        echo "TraitB speaking. ";
        return $this;
    }
}

// Create a class and use both traits
class MyClasss {
    use TraitA, TraitB {
        TraitA::speak insteadof TraitB; // Use TraitA's speak method and alias it
        TraitB::speak as speakB; // Alias TraitB's speak method as speakB
    }
}

// Create an instance of MyClass
$obj = new MyClasss();

// Call the speak method from TraitA (aliased)
$obj->speak()->speakB();


?>



