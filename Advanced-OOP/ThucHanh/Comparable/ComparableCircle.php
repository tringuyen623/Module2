<?php
include "Circle.php";
include "IComparable.php";

class ComparableCircle extends Circle implements Comparabel {
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($circleOther)
    {
        $circleOtherRadius = $circleOther->getRadius();
        if ($this->getRadius() > $circleOtherRadius){
            return 1;
        }elseif ($this->getRadius() < $circleOtherRadius){
            return -1;
        }else {
            return 0;
        }
    }
}
?>