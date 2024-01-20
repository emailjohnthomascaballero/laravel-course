<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "This script was requested using GET method.";
  } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "This script was requested using POST method.";
  } else {
    echo "This script was requested using a method other than GET or POST.";
  }
  ?>


  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <!-- Form content goes here -->
    <input type="submit" value="Submit">
  </form>

</body>

</html>