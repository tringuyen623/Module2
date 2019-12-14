<?php

include_once "Circle.php";

class Cylinder extends Circle {
    private $height;

    public function __construct($_height, $_radius, $_color)
    {
        Circle::__construct($_radius, $_color);
        $this->height = $_height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume()
    {
        return parent::calculatePerimeter() * $this->height;
    }
    
    public function __toString()
    {
        $rs = parent::__toString();
        return "My height is: $this->height $rs";
    }

}
?>