<?php
include "ComparableCircle.php";

$circleOne = new ComparableCircle("Circle1",  8);
$circleTwo = new ComparableCircle("Circle2",  2);

var_dump($circleOne->compareTo($circleTwo));
?>