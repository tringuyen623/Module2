<?php
function findMin($arr){
    $index = 0;
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++){
        if ($arr[$i] < $min){
            $min = $arr[$i];
            $index = $i;
        }
    }
}

$intArr = array (10, 3, 5, 7, 9 , 20, 1, 23, 32);
echo findMin($intArr);
