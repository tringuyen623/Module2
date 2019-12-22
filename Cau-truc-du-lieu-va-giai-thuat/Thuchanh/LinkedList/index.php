<?php
include_once("LinkList.php");

$linkList = new LinkList();
$linkList->insertFirst(11);
$linkList->insertFirst(14);
$linkList->insertLast(15);
$linkList->insertLast(122);
$linkList->insertLast(15);
$linkList->insertLast(122);
$linkList->insertLast(15);
$linkList->insertLast(122);
echo $totalNode = $linkList->totalNodes();
echo "<br>";
$data= $linkList->readList();
echo implode("-", $data);

?>