<?php

class Circle
{
    private $radius;
    private $color;

    public function __construct($_radius, $_color)
    {
        $this->radius = $_radius;
        $this->color = $_color;
    }
    public function setRadius($r){
        $this->radius = $r;
    }
    public function setColor($rgb){
        $this->color = $rgb;
    }
    public function calculateArea()
    {
        return pow($this->radius, 2) * pi();
    }

    public function calculatePerimeter()
    {
        return 2 * pi() * $this->radius;
    }

    public function __toString()
    {
        return "My radius is: $this->radius color is: $this->color";
    }
}
