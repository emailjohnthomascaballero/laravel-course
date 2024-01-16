<!-- - Lesson 4: Operators and Expressions**
- Step 4: Understand PHP operators (arithmetic, comparison, logical) and how to use them in expressions.
- Exercise: Perform arithmetic calculations and use comparison operators. -->

<!-- In Lesson 4, we'll cover PHP operators and expressions. Operators are symbols that perform operations on variables and values. PHP supports various types of operators, including arithmetic, comparison, and logical operators.

PHP Operators:
Arithmetic Operators:
+ (Addition): Adds two values.
- (Subtraction): Subtracts the right operand from the left operand.
* (Multiplication): Multiplies two values.
/ (Division): Divides the left operand by the right operand.
% (Modulus): Returns the remainder of the division.
Comparison Operators:
== (Equal to): Checks if two values are equal.
!= or <> (Not equal to): Checks if two values are not equal.
< (Less than): Checks if the left operand is less than the right operand.
> (Greater than): Checks if the left operand is greater than the right operand.
<= (Less than or equal to): Checks if the left operand is less than or equal to the right operand.
>= (Greater than or equal to): Checks if the left operand is greater than or equal to the right operand.
Logical Operators:
&& or and (Logical AND): Returns true if both conditions are true.
|| or or (Logical OR): Returns true if at least one condition is true.
! (Logical NOT): Returns true if the condition is false and vice versa. -->

<!-- Exercise: Perform arithmetic calculations and use comparison operators.
Let's go through an exercise to practice using arithmetic and comparison operators in PHP: -->

<?php

// Arithmetic Operators:
$num1 = 10;
$num2 = 5;

$sum = $num1 + $num2;
$difference = $num1 - $num2;
$product = $num1 * $num2;
$quotient = $num1 / $num2;
$remainder = $num1 % $num2;

echo "Sum: " . $sum . "<br>";
echo "Difference: " . $difference . "<br>";
echo "Product: " . $product . "<br>";
echo "Quotient: " . $quotient . "<br>";
echo "Remainder: " . $remainder . "<br>";

// Comparison operators
$value1 = 8;
$value2 = 12;

echo "Is value1 equal to value2? " . ($value1 == $value2 ? 'True' : 'False') . "<br>";
echo "Is value1 not equal to value2? " . ($value1 != $value2 ? 'Yes' : 'No') . "<br>";
echo "Is value1 less than value2? " . ($value1 < $value2 ? 'Yes' : 'No') . "<br>";
echo "Is value1 greater than or equal to value2? " . ($value1 >= $value2 ? 'Yes' : 'No') . "<br>";

// Exercise 3: Comparison Operations
// 1. Check if $age is equal to $height and store the result in a variable named $isEqual.
$age = 20;
$height = 6;

$isEqual = $age == $height;

echo $isEqual ? 'True' : 'False' . '<br>';

// 2. Check if $age is not equal to $height and store the result in a variable named $notEqual.
$notEqual = $age != $height;

echo $notEqual ? 'True' : 'False' . '<br>';

?>

<!-- In this exercise:

We've performed arithmetic calculations using variables.
Used the echo statement to display the results.
Used comparison operators to compare values and displayed the results. -->