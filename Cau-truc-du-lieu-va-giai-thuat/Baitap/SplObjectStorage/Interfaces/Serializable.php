<?php
interface Serializable {
    public function serialize():string;
    public function unserialize(string $serialized);
}
?>