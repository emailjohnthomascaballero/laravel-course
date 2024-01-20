<!-- PHP - A Simple HTML Form -->

<!-- The example below displays a simple HTML form with two input fields and a submit button: -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
  <form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
  </form>
</body>

</html>

<!-- POST Method:
Pros:
Security: Data is not visible in the URL, making it more secure for sensitive information like passwords.

Data Limitations: POST has a much higher limit on the amount of data that can be sent. It is suitable for sending large amounts of data.

Not Idempotent: POST requests are not idempotent, which means they can be used for operations that modify data on the server.

Cons:
Complexity: Compared to GET, POST requires a bit more effort to set up, especially when sending data through HTML forms.

Bookmarking: As data is not part of the URL, it cannot be bookmarked, and sharing the URL alone doesn't include the data.

Caching: POST requests are generally not cached by browsers and proxies, which can impact performance in certain scenarios.

LINK: https://www.w3schools.com/php/php_forms.asp
-->