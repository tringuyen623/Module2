<?php
include_once "Point.php";
class MovablePoint extends Point {
    private $xSpeed;
    private $ySpeed;

    public function __construct(float $_x, float $_y, float $_xSpeed, float $_ySpeed)
    {
        parent::__construct($_x, $_y);
        $this->xSpeed = $_xSpeed;
        $this->ySpeed = $_ySpeed;
    }

    public function  getXSpeed()  :float {
        return $this->xSpeed;
    }

    public function  getYSpeed()  :float {
        return $this->ySpeed;
    }

    public function setXSpeed(float $newXspeed){
        $this->xSpeed = $newXspeed;
    }

    public function setYSpeed(float $newYspeed){
        $this->ySpeed = $newYspeed;
    }

    public function setSpeed(float $newXspeed, float $newYspeed){
        $this->xSpeed = $newXspeed;
        $this->ySpeed = $newYspeed;
    }

    public function getSpeed() :array {
        $speed = [$this->xSpeed, $this->ySpeed];
        return $speed;
    }

    public function __toString()
    {
        $position = parent::__toString();
        return "$position,speed=($this->xSpeed,$this->ySpeed)";
    }

    public function move(){
    //    $x = parent::getX();
    //    $y = parent::getY(); 
    //    $x += $this->xSpeed;
    //    $y += $this->ySpeed;
    //    return ;;
    }
}
?>