<?php
class Point2D
{
    private $x;
    private $y;

    public function __construct(float $_x, float $_y)
    {
        $this->x = $_x;
        $this->y = $_y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setX(float $newx)
    {
        $this->x = $newx;
    }

    public function setY(float $newy)
    {
        $this->y = $newy;
    }

    public function setXY(float $newx, float $newy)
    {
        $this->x = $newx;
        $this->y = $newy;
    }

    public function getXY()
    {
        $xy = [$this->x, $this->y];
        return $xy;
    }

    public function __toString()
    {
        return  "$this->x, $this->y";
    }
}
