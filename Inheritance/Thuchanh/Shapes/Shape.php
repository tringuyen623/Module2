<?php
class Shape {
    private $name;

    public function __construct($_name)
    {
        $this->name = $_name;
    }

    public function show(){
        return "I am a shape. My name is $this->name";
    }
}
?>