<?php
include_once("Mylist.php");

$list = new Mylist();
$list->push('Hello');
$list->push('World');
$list->push('Code');
$list->push('Gym');

var_dump($list);
$list->add(2,'Array List Test');

$list->addFirst('Practice');
