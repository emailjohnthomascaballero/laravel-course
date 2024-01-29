<!-- SOURCE: https://youtu.be/vjw5UmY7g9M?si=xDuzTm7nxohToc5N -->
<!-- 17:09 - 18:46 (do not use frontend for security, always do security using a server language.) -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>

<body>

  <!-- htmlspecialchars() - used to converts special characters to will sanitize users input to prevent XSS Cross Site Scripting. -->
  <!-- $_SERVER["PHP_SELF"] - send the data to the same page. -->
  <!-- post - we don`t see the data inside the URL.-->

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <input type="number" name="num01" placeholder="Number one" required>
    <select name="operator" id="">
      <option value="add">+</option>
      <option value="subtract">-</option>
      <option value="multiply">*</option>
      <option value="divide">/</option>
    </select>
    <input type="number" name="num02" placeholder="Number two" required>
    <button>Calculate</button>
  </form>

  <?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Grab data from inputs
    $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
    $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
    $operator = htmlspecialchars($_POST["operator"]);

    // Error handlers
    $errors = false;

    if (empty($num01) || empty($num02) || empty($operator)) {
      echo "<p>Fill in all fields!</p>";
      $errors = true;
    }

    if (!is_numeric($num01) || !is_numeric($num02)) {
      echo "<p>Only write numbers!</p>";
      $errors = true;
    }

    // Calculate numbers if no errors
    if (!$errors) {
      $value = 0;

      switch ($operator) {
        case 'add':
          $value = $num01 + $num02;
          break;
        case 'subtract':
          $value = $num01 - $num02;
          break;
        case 'multiply':
          $value = $num01 * $num02;
          break;
        case 'divide':
          $value = $num01 / $num02;
          break;
        default:
          echo "<p>Something went wrong!</p>";
          break;
      }

      echo "<p>Result is: " . $value . " </p>";

    } 
  }

  ?>

</body>

</html>