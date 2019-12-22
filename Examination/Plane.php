<?php
include_once "Vehicle.php";

class Plane extends Vehicle {
    protected $engineCount;
    protected $operator;
    protected $country;

    public function __construct($type)
    {
        parent::__construct($type);
    }

    public function setOperator($operator){
        $this->operator = $operator;
    }

    public function getOperator(){
        return $this->operator;
    }

    public function getEngineCount(){
        return $this->engineCount;
    }

    public function setEngineCount($engineCount){
        $this->engineCount = $engineCount;
    }

    public function getCountry(){
        return $this->country;
    }

    public function setCountry($country){
        $this->country = $country;
    }

}
?>