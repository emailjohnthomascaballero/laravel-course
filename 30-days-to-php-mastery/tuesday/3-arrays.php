<!-- Creating Arrays:
There are different ways to create arrays in PHP: -->

<!-- normal array -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[1] . '<br>';
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

<!-- Built-in array functions, like the count() function for counting array items: -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars) . '<br>';
?>

<!-- Associative Arrays: -->
<?php
$math = array('five' => 3 + 2, 'sixthynine' => 50 + 19);
echo $math['sixthynine'] . '<br>';
?>

<!-- Multidimensional Arrays: -->
<?php 
$products = array(
  array('name' => 'laptop', 'price' => 50_000),
  array('name' => 'phone', 'price' => 8_000)
);
echo $products[1]['name'];
?>