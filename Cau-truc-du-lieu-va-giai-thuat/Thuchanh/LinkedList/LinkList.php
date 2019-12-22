<?php
include_once("Node.php");

class LinkList {
    private $firstNode;
    private $lastNode;
    private $count;

    public function __construct()
    {
        $this->firstNode = null;
        $this->nextNode = null;
        $this->count = 0;
    }

    public function  insertFirst($data){
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        if ($this->lastNode === null){
            $this->lastNode = $link;
        }
        $this->count++;
    }

    public function insertLast($data){
        if ($this->firstNode !==null){
            $link = new Node($data);
            $this->lastNode->next = $link;
            $this->next = null;
            $this->lastNode = $link;
            $this->count++;
        }else {
            $this->insertFirst($data);
        }
    }
    public function totalNodes(){
        return $this->count;
    }

    public function readList(){
        $listData = array();
        $current = $this->firstNode;
        while ($current !== null){
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}
?>