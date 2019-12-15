<?php
include "QuadraticEquation.php";
$a = 1;
$b = 4;
$c = 0;

$quadratic = new QuadraticEquation($a, $b, $c);

try {
    if ($quadratic->getvaluea() === 0) {
        throw new Exception("The a value must different from zero");
    } else {
        $delta = $quadratic->getDiscriminant();
        try {
            if ($delta >= 0) {
                if ($delta = 0) {
                    echo "The equation have one root is: Root = " . $quadratic->getRoot3();
                } else {
                    echo "The equation have two roots is: Root1 = " . $quadratic->getRoot1() . " & Root2 = " . $quadratic->getRoot2();
                }
            } else {
                throw new Exception("The equation have no root");
            }
        } catch (Exception $e) {
            echo "Message: " . $e->getMessage();
        }
    }
} catch (Exception $e) {
    echo "Message: " . $e->getMessage();
}
