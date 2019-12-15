<?php

include "classFan.php";

$fan1 = new Fan();
$fan1->setSpeed(Fan::FAST);
$fan1->setRadius(10);
$fan1->setColor("yellow");
$fan1->setStatus(true);
echo $fan1->__toString();
echo "<br>";

$fan2 = new Fan();
$fan2->setSpeed(Fan::MEDIUM);
$fan2->setRadius(5);
$fan2->setColor("blue");
$fan2->setStatus(false);
echo $fan2->__toString();
?>