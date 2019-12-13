<?php
include_once "classShape.php";

class Rectangle extends Shape{
    private $width;
    private $height;

    public function __construct($_name, $_width, $_height)
    {
        parent::__construct($_name);
        $this->width = $_width;
        $this->height = $_height;
    }

    public function calculateArea(){
        return $this->width * $this->height;
    }

    public function calculatePerimeter(){
        return ($this->width + $this->height) * 2;
    }
}
?>