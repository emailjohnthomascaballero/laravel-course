<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calculator</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <div class="title">
      <h1>PHP CALCULATOR</h1>
    </div>
    <div class="body">
      <form action="" method="post">
        <input type="text" name="number1"><br>
        <input type="text" name="number2"><br>
        <input type="text" name="operator">
        <input type="submit" value="COUNT">
      </form>
      <?php
      $number1 = $_POST["number1"];
      // $_POST["number1"];
      // $_POST["number2"];
      // $_POST["operator"];

      echo "$number1";
      ?>
      <div class="footer">
        <h2 class="footer">Develop By: <br>
          John Thomas F. Caballero
        </h2>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>