<?php
include_once("Traversable.php");

interface Iterator extends Traversable {
public function current();
public function key();
public function next ();
public function rewind();
public function valid();
}
?>