<?php
include_once "Circle.php";
include_once "Cylinder.php";
$redCylinder = new Cylinder(5, 10,"red");
echo $redCylinder->__toString();
echo "<br>";
echo "My Perimeter is: " . $redCylinder->calculatePerimeter();
?>