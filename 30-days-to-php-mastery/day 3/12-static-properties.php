<!-- PHP - Static Properties
Static properties can be called directly - without creating an instance of a class.

Static properties are declared with the static keyword: -->

<?php 

class pi {
  public static $value = 3.14159;
}

echo pi::$value;

?>