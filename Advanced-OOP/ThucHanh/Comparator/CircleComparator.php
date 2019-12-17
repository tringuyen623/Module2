<?php
include "Circle.php";
include "Comparable.php";

class CircleComparator implements Comparabel
{
    public function compareTo($circle1, $circle2)
    {
        $radiusOne = $circle1->getRadius();
        $radiusTwo = $circle2->getRadius();

        if ($radiusOne > $radiusTwo) {
            return 1;
        } else if ($radiusOne < $radiusTwo) {
            return -1;
        } else {
            return 0;
        }
    }
}
