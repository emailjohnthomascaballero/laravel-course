<!-- 
  Q:
how did you guys start learning laravel? 

  A:
Learn php
variables
conditional statement
loops
array
oop -->

<!-- Variables:
Variables are used to store information in PHP. You can create a variable by using the dollar sign $ followed by the variable name. Variable names in PHP are case-sensitive. -->

<?php
// Variable declaration
$variableName = "Hello, World!" . '<br>';

// Output the variable
echo $variableName;


// Data Types:
// PHP supports several data types. Here are some of the basic ones:

// String: Sequence of characters.
$stringVar = "This is a string";

// Integer: Whole numbers without decimal points.
// $integerVar = 42;

// Float (or Double): Numbers with decimal points.
$floatVar = 3.14;

// Boolean: Represents either true or false.
$boolVar = true;


// Operators:
// Operators are used to perform operations on variables and values.

// $sum = $a + $b;
// $difference = $a - $b;
// $product = $a * $b;
// $quotient = $a / $b;
// $remainder = $a % $b;

// $isEqual = ($a == $b);     // Equal
// $isNotEqual = ($a != $b);  // Not equal
// $isGreaterThan = ($a > $b); // Greater than
// $isLessThan = ($a < $b);    // Less than

// $andResult = ($x && $y); // AND
// $orResult = ($x || $y);  // OR
// $notResult = !$x;        // NOT


// not operator:
$not = false;
$notOperator = !$not;
if ($notOperator) {
  echo 'True';
} else {
  echo 'False';
}

echo '<br>';

// Control Flow:
// Control flow structures allow you to control the flow of your program.

// Conditional Statements (if, else if, else):
$a = 10;

if ($a > 10) {
  echo "Greater than 10";
} elseif ($a == 10) {
  echo "Equal to 10";
} else {
  echo "Less than 10";
}

echo '<br>';

// Switch Statement:
$day = "Monday";

switch ($day) {
  case "Monday":
    echo "It's Monday!";
    break;
  case "Tuesday":
    echo "It's Tuesday!";
    break;
  default:
    echo "It's another day.";
}

echo '<br>';

// Loops (for, while, do-while):
// For loop
for ($i = 0; $i < 5; $i++) {
  echo $i;
}

echo '<br>';

// While loop
$j = 0;
while ($j < 5) {
  echo $j;
  $j++;
}

echo '<br>';

// Do-while loop
$k = 0;
do {
  echo $k;
  $k++;
} while ($k < 10);