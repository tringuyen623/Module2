<?php
class Rectangle
{
    public $width;
    public $height;
    public function __construct($_width, $_height)
    {
        $this->width = $_width;
        $this->height = $_height;
    }
    public function getArea()
    {
        return $this->width * $this->height;
    }
    public function getPerimeter()
    {
        return ($this->width + $this->height) * 2;
    }
    public function display(){
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
