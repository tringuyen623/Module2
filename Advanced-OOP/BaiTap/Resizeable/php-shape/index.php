<?php

/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:17
 */
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');

$shapes = [
    new Circle("Circle 01", 3),
    new Cylinder("Cylinder 01", 3, 4),
    new Rectangle("Rectangle 01", 3, 4),
    new Square("Square 01", 4)
];
foreach ($shapes as $shape) {
    echo $shape->show() . '<br />';
    echo 'My area: ' . $shape->calculateArea() . '<br />';
    echo 'My perimeter: ' . $shape->calculatePerimeter() . '<br />';
    $randomSize = rand(1, 100);
    $shape->resize($randomSize);
    echo 'My area after resize ' . "$randomSize%: ". $shape->calculateArea() . '<br />';
    echo 'My perimeter after resize: ' . "$randomSize%: ". $shape->calculatePerimeter() . '<br />';
    echo "---<br>"; 
}

