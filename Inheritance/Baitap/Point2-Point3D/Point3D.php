<?php
include_once "Point2D.php";

class Point3D extends Point2D
{
    private $z;

    public function __construct($_x, $_y, $_z)
    {
        Point2D::__construct($_x, $_y);
        $this->z = $_z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ(float $newz)
    {
        $this->z = $newz;
    }

    public function setXYZ(float $newx, float $newy, float $newz)
    {
        parent::setXY($newx, $newy);
        $this->z = $newz;
    }
    public function getXYZ()
    {
        $xyz = parent::getXY();
        array_push($xyz, $this->z);
        return $xyz;
    }

    public function __toString()
    {
        $result = parent::__toString() . ", " . $this->z;
        return "$result";
    }
}
