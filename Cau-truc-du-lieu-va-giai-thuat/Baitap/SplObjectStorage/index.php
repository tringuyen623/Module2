<?php
$new = new SplQueue;
$new->push(2);
$new->push(2);
$new->push(2);
$new->push(2);
$new->push(2);

$new->add(2,'Hello');
$new->add(2,'chi do');
$new->add(2,'world');
var_dump($new);
