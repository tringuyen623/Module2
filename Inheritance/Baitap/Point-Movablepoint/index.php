<?php 
include_once "MovablePoint.php";

$point = new Point(2.5, 2.5);
echo $point->__toString();
echo "<br>";
$x = $point->getX();
$y = $point->getY();

$movePoint = new MovablePoint($x,$y, 15,20);
echo "Current Point " . $movePoint ->__toString();
echo "<br>";
$movePoint->move();
echo "New Point after move: ". $movePoint->__toString();

?>