<!-- Object-Oriented Programming (OOP) concepts -->

<!-- 1. Classes:

-Blueprints for creating objects.
-Define properties (data) and methods (functions) that objects of that type will have.
-Defined using the class keyword.
Example: -->

<?php
class Car {
  public $color;
  public $brand;

  public function start() {
    echo "Car started.";
  }

}


// 2. Objects:

// -Instances of classes.
// -Have their own unique set of properties and can call the methods defined in the class.
// -Created using the new keyword.
// Example: 

$myCar = new Car();
$myCar->color = 'red' . '<br>';

echo $myCar->color;
$myCar->start();

?>



