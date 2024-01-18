<!-- When the user fills out the form above and clicks the submit button, the form data is sent for processing to a PHP file named "welcome.php". The form data is sent with the HTTP POST method.

To display the submitted data you could simply echo all the variables. The "welcome.php" looks like this: -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post</title>
</head>
<body>
  Welcome <?php echo $_POST["name"]; ?> <br>
  Your email is: <?php echo $_POST["email"]; ?>
</body>
</html>

<!-- 
Use POST when:

You are sending data to the server to create, update, or delete resources.
The data being sent is sensitive (e.g., login credentials).
You are dealing with large amounts of data. 

LINK: https://www.w3schools.com/php/php_forms.asp
-->
