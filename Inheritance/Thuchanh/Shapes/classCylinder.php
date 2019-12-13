<?php

include_once "classCircle.php";

class Cylinder extends Circle {
    private $height;

    public function __construct($_name,$_radius,$_height)
    {
        Circle::__construct($_name,$_radius);
        $this->height = $_height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() + parent::calculatePerimeter() * 2;
    }

    public function calculateVolume()
    {
        return pi() * pow($this->radius,2) * $this->height;
    }
}
?>