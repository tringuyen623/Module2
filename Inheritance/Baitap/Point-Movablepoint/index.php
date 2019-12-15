<?php 
include_once "MovablePoint.php";

$point = new Point(2.5, 2.5);
echo $point->__toString();

$movePoint = new MovablePoint(5.5,4.5,15,20);
echo $movePoint;
?>