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

