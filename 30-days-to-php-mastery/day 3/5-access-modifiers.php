<!-- PHP - Access Modifiers
Properties and methods can have access modifiers which control where they can be accessed.

There are three access modifiers:

public - the property or method can be accessed from everywhere. This is default
protected - the property or method can be accessed within the class and by classes derived from that class
private - the property or method can ONLY be accessed within the class
-->

<?php
class Games {
  public $name;
  protected $price;
  private $company;
}

$game = new Games();
$game->name = "Assassin`s Creed Syndicate"; // OK
// $game->price = 1_000; // ERROR
// $game->company = "Ubisoft"; // ERROR
?>