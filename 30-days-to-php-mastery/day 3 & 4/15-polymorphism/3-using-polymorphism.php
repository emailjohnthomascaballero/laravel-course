<?php 

class Animal {
  public function makeSound() {
      echo "Some generic sound <br>";
  }
}

class Dog extends Animal {
  public function makeSound() {
      echo "Woof! Woof! <br>";
  }
}

class Cat extends Animal {
  public function makeSound() {
      echo "Meow! <br>";
  }
}

?>


<!-- 3. Using Polymorphism:
Polymorphism allows you to work with objects of different classes through a common interface. This can simplify code, improve flexibility, and make it easier to extend your application.

Example: -->


<?php 
function animalSound($animal){
  $animal->makeSound();
}

$dog = new Dog();

animalSound($dog); //use object in parameter.

?>