<?php
include_once "classShape.php";

class Circle extends Shape
{
    private $radius;

    public function __construct($_name, $_radius)
    {
        Shape::__construct($_name);
        $this->radius = $_radius;
    }

    public function calculateArea()
    {
        return pow($this->radius, 2) * pi();
    }

    public function calculatePerimeter()
    {
        return 2 * pi() * $this->radius;
    }
}
