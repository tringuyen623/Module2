<?php
include("Arraylist.php");

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(15);
$listInteger->add(4);
$listInteger->add(-1);

echo $listInteger->get(2);
var_dump($listInteger);
$listInteger->remove(2);
var_dump($listInteger);

?>