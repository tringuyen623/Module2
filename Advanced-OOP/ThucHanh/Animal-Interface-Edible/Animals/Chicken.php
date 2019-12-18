<?php
include_once dirname(__FILE__) . '/../AbstractClass/Animal.php';
include_once dirname(__FILE__) . '/../InterfaceClass/IEdible.php';
class Chicken extends Animal
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";
    }
    public function howtoeat()
    {
        return "could be fried";
    }
}
