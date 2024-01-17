<!-- Lesson 5: Control Structures**
- Step 5: Study conditional statements (if, else, switch) and loops (for, while, foreach) in PHP.
- Exercise: Write a program that uses conditionals and loops to solve a simple problem. -->

<!-- Conditional Statements:

if-else: Executes one block of code if a condition is true, and another block if it's false. -->

<?php

$grade = 80;

if ($grade >= 75) {
  echo 'You passed the exam' . '<br>';
} else {
  echo 'You fail, better luck next time' . '<br>';
}

// if-elseif-else: Checks multiple conditions and executes the corresponding code block for the first true condition.

$day = 'Saturday';
if ($day == 'Monday') {
  echo 'Its ' . $day . '<br>';
} elseif ($day == 'Saturday') {
  echo 'Happy Sabbath' . '<br>';
} else {
  echo "It's neither Monday or Saturday" . '<br>';
}

// Loops:

// while: Repeats a block of code as long as a condition is true.

$i = 1;

while ($i <= 5) {
  echo $i . '<br>';
  $i++;
}

// for: Repeats a block of code a specific number of times.

for ($i=0; $i < 5; $i++) { 
  echo $i * 2 . ' ';
}

echo '<br>';

// foreach: Iterates over each element in an array.

$names = array('John', 'Helena', 'Thea');

foreach ($names as $name) {
  echo $name . ' ';
}

echo '<br>';

// Exercise:

// Write a program that uses conditionals and loops to solve a simple problem.

// Here's a problem for you to tackle:

// Problem:

// Write a PHP program that asks the user to enter a password. The program should check if the password meets the following criteria:

// It must be at least 8 characters long.
// It must contain at least one uppercase letter, one lowercase letter, one number, and one special character (!@#$%^&*).
// If the password meets the criteria, display a message saying "Strong password!". Otherwise, display a message listing the criteria that weren't met.


// Prompt the user to enter a password
function password($num) {

  // Check for password length 
  if (strlen($num) == 8) {
    echo 'yes';
  } else {
    echo 'no';
  }

}


// Check for uppercase, lowercase, numbers, and special characters

// Display appropriate message based on password strength

password(12345678);

?>

