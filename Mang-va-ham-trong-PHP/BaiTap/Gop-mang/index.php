<?php
$arr1 = array (
    0,1,2,3,4
);
$len1 = count($arr1);

$arr2 = array(
5,6,7,8,9
);
$len2 = count($arr2);

$arr3 = array();
$len3 = $len1 + $len2;

 for ($i = 0; $i < count($arr1); $i++){
    $arr3[$i] = $arr1[$i];
 }
 
 for ($j = 0; $j < count($arr2); $j++){
   $arr3[$len1] = $arr2[$j];
   $len1++;
}
var_dump($arr3);
?>