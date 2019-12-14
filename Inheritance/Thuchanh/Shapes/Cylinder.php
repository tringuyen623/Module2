<?php

include_once "Circle.php";

class Cylinder extends Circle {
    private $height;

    public function __construct($_name,$_radius,$_height)
    {
        Circle::__construct($_name,$_radius);
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
    }
}
?>