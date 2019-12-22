<?php
include_once "Car.php";
include_once "Plane.php";
include_once "Train.php";

$car = new Car("BMW", false);

$car->setOwner("Tri");
$car->setColor("blue");
$car->setColorNumber("#0000FF");
var_dump($car);
// echo "This car is of " .$car->getOwner()."<br>";
// echo $car->getColorInfo()."<br>";

$plane = new Plane("Boeing");
$plane->setOperator("Mr.Tri");
$plane->setEngineCount("1000");
$plane->setCountry("Viet Nam");
$plane->setColorNumber("#FFFF00");
$plane->setColor("Yellow");
// echo $plane->getOperator()."<br>";
var_dump($plane);




$train = new Train("Thong Nhat", 15);
$train->setColor("green");
$train->setColorNumber("#008000");
$train->setOperator("Mr.Tri");
// $train->getOperator();
var_dump($train);

?>