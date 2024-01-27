<!-- PHP - Interfaces vs. Abstract Classes
Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

Interfaces cannot have properties, while abstract classes can
All interface methods must be public, while abstract class methods is public or protected
All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
Classes can implement an interface while inheriting from another class at the same time -->

<?php 

interface Animal {
  public function makesound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "meow";
  }
}

$cat = new Cat();
$cat->makeSound();

?>