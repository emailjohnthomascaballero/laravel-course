<!-- PHP - What is an Iterable?
An iterable is any value which can be looped through with a foreach() loop. -->

<?php 

$fruits = ["Banana", "Mango", "Pineapple"];

foreach ($fruits as $fruit) {
  echo $fruit . " ";
}

?>

