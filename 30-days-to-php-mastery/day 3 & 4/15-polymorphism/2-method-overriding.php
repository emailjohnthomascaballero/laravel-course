<!-- 2. Method Overriding (Polymorphism):
Method overriding is a core concept of polymorphism where a subclass provides a specific implementation of a method that is already defined in its superclass. This allows objects of different classes to be treated as objects of a common base class during method calls. -->

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

$dog = new Dog();
$cat = new Cat();

$dog->makeSound(); // Outputs: Woof! Woof!
$cat->makeSound(); // Outputs: Meow!

?>