<?php
include_once(dirname(__FILE__) . "/../AbstractClass/Fruits.php");

class Apple extends Fruit {
    public function howtoEat()
    {
        return "Apple could be slided";
    }
}
?>