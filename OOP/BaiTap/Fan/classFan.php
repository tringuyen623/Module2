<?php
class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $speed;
    private $on;
    private $radius;
    private $color;
    
    public function __construct()
    {
        $this->speed = Fan::SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
         }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getStatus()
    {
        return $this->on;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setSpeed($_speed)
    {
        switch ($_speed) {
            case 1:
                $this->speed = Fan::SLOW;
                break;
            case 2:
                $this->speed = Fan::MEDIUM;
                break;
            case 3:
                $this->speed = Fan::FAST;
                break;
        }
    }

    public function setStatus($_status)
    {
        $this->on = $_status;
    }

    public function setRadius($_radius)
    {
        $this->radius = $_radius;
    }

    public function setColor($_color)
    {
        $this->color = $_color;
    }

    public function __toString()
    {
        if ($this->getStatus()) {
            return "Fan is on: speed = " .  $this->getSpeed() .  ", color = " . $this->getColor() . ", radius = " . $this->getRadius();
        } else {
            return "Fan is off: color  = " . $this->getColor() . ", radius = " . $this->getRadius();
        }
    }
}
