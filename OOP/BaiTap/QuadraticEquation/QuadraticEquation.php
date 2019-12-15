<?php
class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($_a, $_b, $_c)
    {
        $this->a = $_a;
        $this->b = $_b;
        $this->c = $_c;
    }
    public function getvaluea()
    {
        return $this->a;
    }
    public function getvalueb()
    {
        return $this->b;
    }
    public function getvaluec()
    {
        return $this->c;
    }
    public function getDiscriminant()
    {
        return $delta = pow($this->getvalueb(), 2) - (4 * $this->getvaluea() * $this->getvaluec());
    }
    public function getRoot1()
    {
        return $r1 = ((-$this->getvalueb()) + sqrt($this->getDiscriminant())) / (2 * $this->getvaluea());
    }
    public function getRoot2()
    {
        return $r2 = ((-$this->getvalueb()) - sqrt($this->getDiscriminant())) / (2 * $this->getvaluea());
    }
    public function getRoot3(){
        return $r3 = (-$this->getvalueb()) / (2 * $this->getvaluea());
    }
}
