<?php

$array = [
    1, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14
];

function reverseArray($arr){
    $stack = new SplStack;
    foreach ($arr as $value) {
        $stack->push($value);
    }
    
    $stack->offsetSet(0,$stack[0]);
    
    $stack->rewind();
    $result = [];
    while ($stack->valid()){
        $result[] = $stack->current();
        $stack->next();
    }
    return $result;
}
$reverseArray = reverseArray($array);
echo "The array before reverse: <br>";
var_dump($array);
echo "The array after reverse: <br>"; 
var_dump($reverseArray);

