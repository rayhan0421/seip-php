<?php



echo "<h1> Regular expression</h1>";

echo "<br/>";

$subject = "abcdef";
$pattern = '/^def/';
preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE, 3);
print_r($matches);