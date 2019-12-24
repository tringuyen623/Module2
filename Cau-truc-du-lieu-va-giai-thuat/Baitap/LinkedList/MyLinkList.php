<?php
include_once('Node.php');

class MylinkedList {
    private $head;
    private $tail;
    private $numNode;

    public function __construct(){
        $this->head = null; 
        $this->tail = null;
        $this->numNode = 0;
    }

    public function add(int $int, $element){

    }

    public function addFirst($element) {
        $link = new Node($element);
        $link->next = $this->head;
        $this->head = $link;

        if($this->tail === null){
            $this->tail = $link;
        }

        $this->numNode++;
    }

    public function addLast($element){

    }

    public function remove($index){

    }

}
?>>
