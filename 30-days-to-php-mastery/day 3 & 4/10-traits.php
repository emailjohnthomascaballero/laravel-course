<!-- PHP - What are Traits?
PHP only supports single inheritance: a child class can inherit only from one single parent.

So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected). -->

<?php 

trait message1 {
  public function msg1() {
    echo "OOP is fun! <br>";
  }
}

trait message2 {
  public function msg2() {
    echo "OOP reduces code duplication! ";
  }
}

class Welcome {
  use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
$obj->msg2();

?>