<?php
include "classRec.php";
$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);

echo $rectangle->width."<br>";
echo $rectangle->height."<br>";

$rectangle->width = 20;
$rectangle->height = 30;

echo $rectangle->width ."<br>";
echo $rectangle->height."<br>";
echo $rectangle->getArea()."<br>";
echo $rectangle->getPerimeter()."<br>";
echo "Your Rectangle: ". $rectangle->display();
?>