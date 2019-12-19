<?php
function isPalindrome($str)
{
    if (empty($str) || strlen($str) === 1) {
        return true;
    }

    $queue = new SplQueue();
    $length = strlen($str);
    for ($i = 0; $i < $length; $i++) {
        $queue->push($str[$i]);
    }

    $reverseString = '';

    while (!$queue->isEmpty()) {
        $reverseString .= $queue->pop();
    }
    echo $reverseString . "<br>";
    return $str === $reverseString;
}

$str = 'ABBA';

echo isPalindrome($str) ? "The $str is palindrome" : "The $str is not palindrome";
