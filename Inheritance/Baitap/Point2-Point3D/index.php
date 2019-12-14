<?php
include_once "Point3D.php";

$point2D = new Point2D(0.5, 0.5);
echo ($point2D->__toString());
echo "<br>";
$point2D->setXY(5.4, 10.2);
echo ($point2D->__toString());
echo "<br>";


$point3D = new Point3D(0.5, 0.5, 1.5);
echo ($point3D);
echo "<br>";
$point3D->setXYZ(1.2, 3.5, 4.7);
print_r($point3D->getXYZ());
echo "<br>";
echo ($point3D->__toString());
