<?php
include "classStopWatch.php";

$time = new StopWatch();
echo $time->start();
echo "<br>";
$sum = 0;
usleep(3000000);
echo $time->stop();
echo "<br>";

$result = $time->getElapsedTime();
echo "<br>";
echo "Did sum of number from 0 to 1000000 in $result second";
?>