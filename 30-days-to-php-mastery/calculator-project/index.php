<!-- SOURCE: https://youtu.be/vjw5UmY7g9M?si=xDuzTm7nxohToc5N -->

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
    <input type="number" name="num01" placeholder="Number one">
    <select name="operator" id="">
      <option value="add">+</option>
      <option value="subtract">-</option>
      <option value="multiply">*</option>
      <option value="divide">/</option>
    </select>
    <input type="number" name="num02" placeholder="Number two">
    <button>Calculate</button>
  </form>

  <?php
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
    $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
  }

  ?>

</body>
</html>