<?php
interface ArrayAccess {
    public function offsetExists ($offset) :bool;
    public function offsetGet($offset);
    public function offsetSet($offset, $value);
    public function offsetUnset($offset);
}
?>