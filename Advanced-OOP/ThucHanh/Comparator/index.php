<?php
include "CircleComparator.php";

$circle1 = new Circle("Circle1", 4);
$circle2 = new Circle("Circle2", 4);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compareTo($circle1,$circle2));
?>  