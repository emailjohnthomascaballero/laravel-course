<?php 

require_once 'ClassA.php';
require_once 'ClassB.php';

$bookOrder = new Book\Order();
$bookOrder->handle();

$movieOrder = new Movie\Order();
$movieOrder->handle();