<!-- - Lesson 3: Variables and Data Types**
- Step 3: Learn about PHP data types (int, float, string, boolean) and how to declare variables.
- Exercise: Create variables of different data types and print their values. -->

<!-- Lesson 3, we'll cover PHP variables and data types. Variables are used to store and manipulate data in a program, and data types define the type of data that can be stored in a variable. PHP supports various data types, including integers (int), floats (float), strings (string), and booleans (bool).

PHP Data Types:
Integer (int): Whole numbers without a decimal point.
Float (float): Numbers with a decimal point or numbers in scientific notation.
String (string): Sequences of characters, enclosed in single (') or double (") quotes.
Boolean (bool): Represents either true or false.
Declaring Variables:
In PHP, you can declare a variable using the dollar sign $ followed by the variable name. Variable names are case-sensitive, and they must start with a letter or an underscore.

Exercise: Create variables of different data types and print their values.
Let's go through an exercise to practice declaring variables of different data types: -->

<?php 

  $integerVariable = 1;
  $floatVariable = 0.1;
  $stringVariable = 'John';
  $booleanVariable = true;

  echo 'Integer: ' . $integerVariable . '<br>';
  echo 'Float: ' . $floatVariable . '<br>';
  echo 'String: ' . $stringVariable . '<br>';
  echo 'Boolean: ' . $booleanVariable . '<br>';

?>