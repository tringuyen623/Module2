<?php
function isFA($male, $female)
{
    while (!$male->isEmpty() && !$female->isEmpty()) {
        echo ($male->shift()) . " & " . ($female->shift()) . "<br>";
    }

    echo !$male->isEmpty() ? $male->shift() . " FA" : ""; 
    echo !$female->isEmpty() ? $female->shift() . " FA" : "";
}

$male = new SplQueue();
$male->push('Mr.Tan');
$male->push('Mr.Huu');
$male->push('Mr.Hoang');
$male->push('Mr.Dong');
$male->push('Mr.Tien');

$female = new SplQueue();
$female->push('Ms.Phuong Trinh');
$female->push('Ms.Tu Trinh');
$female->push('Ms.Ngoc Trinh');
$female->push('Ms.Canh Trinh');

isFA($male, $female);