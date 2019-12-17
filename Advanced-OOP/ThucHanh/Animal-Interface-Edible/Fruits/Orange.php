<?php
include_once(dirname(__FILE__) . "/../AbstractClass/Fruits.php");

class Orange extends Fruit {
    public function howtoEat()
    {
        return "Orange could be juiced";
    }
}
?>