<?php
include_once "classSquare.php";
include_once "classCylinder.php";


$square = new Square("Square", 5, 5);
echo $square->show() . "<br>";
echo " My area is: " . $square->calculateArea() . " My perimeter is: " . $square->calculatePerimeter() . "<br><br>";

$rectangel = new Rectangle("Rectangle", 5, 10);
echo $rectangel->show() . "<br>";
echo " My area is: " . $rectangel->calculateArea() . " My perimeter is: " . $rectangel->calculatePerimeter() . "<br><br>";

$circle = new Circle("Circle", 5);
echo $circle->show() . "<br>";
echo " My area is: " . $circle->calculateArea() . " My perimeter is: " . $circle->calculatePerimeter() . "<br><br>";

$cylinder = new Cylinder("Cylinder", 5, 10);
echo $cylinder->show() . "<br>";
echo " My area is: " . $cylinder->calculateArea() . " My perimeter is: " . $cylinder->calculatePerimeter() . "<br><br>";
