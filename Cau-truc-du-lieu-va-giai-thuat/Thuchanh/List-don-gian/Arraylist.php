<?php
class ArrayList
{
    public $arrayList;


    public function arrayList($arr = "")
    {
        if (is_array($arr)) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = array();
        }
    }

    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    public function size()
    {
        return count($this->arrayList);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("Error in arrayList.get");
        }
    }

    public function remove($index)
    {
        
        if ($this->isInteger($index) && $index < $this->size()) {
            $newArrayList = array();
            foreach ($this->arrayList as $key=>$value){
                
                if ($key === $index) {
                    continue;
                }
                $newArrayList[] = $this->get($key);
            }
            $this->arrayList = $newArrayList;
        } else {
            die("Error in arrayList.remove");
        }
        
    }
}
