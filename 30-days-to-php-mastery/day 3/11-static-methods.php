<!-- PHP - Static Methods
Static methods can be called directly - without creating an instance of the class first.

Static methods are declared with the static keyword: -->

<?php 

class ClassName {
  public static function staticMethod() {
    echo "Hello World";
  }
}

// To access a static method use the class name, double colon (::), and the method name:

ClassName::staticMethod();

?>


<!-- Static methods can also be called from methods in other classes. To do this, the static method should be public: -->

<?php
class A {
  public static function welcome() {
    echo "Hello World!";
  }
}

class B {
  public function message() {
    A::welcome();
  }
}

$obj = new B();
echo $obj -> message();
?>


<!-- To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected. -->

<?php
class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>