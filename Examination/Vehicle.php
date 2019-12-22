<?php
class Vehicle {
    protected $color;
    protected $type;
    protected $colorNumber;

    public function __construct($_type)
    {
        $this->type = $_type;
    }

    public function setColor($_color){
        $this->color = $_color;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColorNumber($number){
        $this->colorNumber = $number;
    }

    public function getColorInfo(){
        return "$this->colorNumber, $this->color";
    }

    public function getType()
    {
        return $this->type;
    }
}
?>