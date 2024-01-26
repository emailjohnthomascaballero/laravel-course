<!-- 1. Method Overloading:
Method overloading in PHP refers to the ability to define multiple methods in a class with the same name but with different parameter lists. PHP does not support traditional method overloading where you can have multiple methods with the same name but different parameter types or return types. However, you can achieve a form of method overloading by using default parameter values. -->

<?php 
class Calculator {
  public function add ($a = 0, $b = 0){
    return $a + $b;
  }
}

$calc = new Calculator();

echo $calc->add(5, 5);

?>