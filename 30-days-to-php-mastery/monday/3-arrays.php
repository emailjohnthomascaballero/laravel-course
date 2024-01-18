<!-- Creating Arrays:
There are different ways to create arrays in PHP: -->

<!-- normal array -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
?>


<!-- Array items of four different data types: -->
<?php
// function example:
function myFunction()
{
  echo "This text comes from a function <br>";
}

// create array:
$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction());

// calling the function from the array item:
$myArr[3];
?>


<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>