<?php
include_once "Vehicle.php";

class Car extends Vehicle {
    protected $hasTrunk;
    protected $owner;

    public function __construct($_type, $hasTrunk=null){
        parent::__construct($_type);
        $this->hasTrunk = $hasTrunk;
    }
    
    public function setOwner($_owner){
        $this->owner = $_owner;
    }

    public fnction getOwner(){
        return $this->owner;
    }

    public function getHasTrunk(){
        return $this->hasTrunk;
    }

    public function setHasTrunk($hasTrunk){
        $this->hasTrunk = $hasTrunk;
    }
}
?>
