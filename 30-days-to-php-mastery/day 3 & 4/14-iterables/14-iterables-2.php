<!-- In Object-Oriented Programming (OOP), iterables play a crucial role in handling diverse data collections within your classes. Here's an introduction for beginners:

Understanding Iterables:

Just like in general PHP, iterables in OOP provide a structured way to loop through your object's data. This allows you to write clean and efficient code without manually managing indexes or complex loops.

How Iterables Work in OOP:

There are two main approaches to iterating in OOP:

Implementing the Iterator Interface:
Your class implements the Iterator interface, defining methods like current(), next(), and rewind().
This gives you full control over how data is exposed during iteration.
Useful for complex data structures or specific iteration logic.
Using the Traversable Interface:
Your class doesn't need to implement any interface explicitly.
As long as your class provides access to its data in a "walkable" format (e.g., using an internal array), it becomes automatically iterable.
Simple and convenient for common data structures like arrays within your object.
Benefits of Iterables in OOP:

Code Separation: Encapsulate data access logic within your class, promoting cleaner and organized code.
Flexibility: Choose the approach that best suits your data structure and needs.
Readability: Makes code easier to understand and maintain for others.
Modern Practices: Aligns with modern PHP OOP techniques.
Example: Iterating a User Class: -->

<?php 

class User {
  public $posts = [];

  // Use Traversable approach (simple array of posts)
  public function getPosts(): array {
    return $this->posts;
  }
}

$user = new User();
$user->posts = ["Post 1", "Post 2", "Post 3"];

// Foreach loop with `Traversable`
foreach ($user->getPosts() as $post) {
  echo "posted: $post <br>";
}


?>

