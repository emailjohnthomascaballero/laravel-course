<?php
function greetWithName($name) {
  echo "Hello, $name!";
}

greetWithName('John');

echo '<br>';


// Default Parameter Values:
// You can also provide default values for parameters:

function greetWithNameDefault($name = "Guest") {
  echo "Hello, $name!";
}

greetWithNameDefault();

echo '<br>';


// Return Values:
// Functions can return values using the return keyword. This is useful when you want the function to produce a result.

function add($a, $b) {
  return $a + $b;
}

$addition = add(5, 5);
echo $addition;

echo '<br>';


// Scope of Variables:
// Variables declared inside a function are usually local to that function, meaning they cannot be accessed outside of it. If you need a variable to be accessible globally, you can use the global keyword.

// Anonymous Functions (Closures):
// PHP supports anonymous functions, also known as closures. These functions don't have a name and can be assigned to variables.
$add = function($num1, $num2) {
  return $num1 + $num2;
};

$result = $add(1, 1);
echo $result;

// These are the basics of working with functions in PHP. As you become more familiar with PHP, you'll find functions to be powerful tools for organizing and reusing code.