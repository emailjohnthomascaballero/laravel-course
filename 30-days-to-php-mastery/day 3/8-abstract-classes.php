<!-- PHP - What are Abstract Classes and Methods?
Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

An abstract class or method is defined with the abstract keyword: -->

<?php 
// abstract class Animal {
//   abstract public function makeSound();
//   abstract public function eat();

//   public function sleep(){
//     echo "Zzz... <br>";
//   }
// }
?>

<!-- Here, makeSound and eat are abstract methods. We're saying that any animal in our game must be able to make a sound and eat, but we're not specifying exactly how each animal should do it. -->

<?php 
// class Dog extends Animal {
//   function makeSound(){
//     echo "Woof! Woof! <br>";
//   }

//   function eat(){
//     echo "Nom nom nom... <br>";
//   }
// }

// $dog = new Dog();
// $dog->makeSound();
// $dog->eat();
// $dog->sleep();

?>

<!-- Summary:
Abstract class: A partially incomplete blueprint.
Abstract method: A method declared in an abstract class without a body.
Purpose: To ensure that child classes provide their own versions of certain methods.
Usage: Create a common structure for related classes.
As you dive deeper into OOP, you'll see abstract classes used in various scenarios to create well-organized and extensible code. -->





<!-- PHP - What are Abstract Classes and Methods?
Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

An abstract class or method is defined with the abstract keyword: -->

<?php 
  // Parent Class
  abstract class Car {
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }

    abstract public function intro() : string;
  }

  // Child Class
  class Audi extends Car {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name";
    }
  }

  class Volvo extends Car {
    public function intro() : string {
      return "Proud to be Swedish! I'm an $this->name";
    }
  }

  $audi = new Audi("Audi");
  echo $audi->intro() . '<br>';

  $volvo = new Volvo("Volvo");
  echo $volvo->intro();

?>