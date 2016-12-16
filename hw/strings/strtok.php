<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("log_errors", 0);

$content = "This is a test string, which is used for demonstrating the tokenization using PHP. PHP is a very (strong) scripting-language";

$words = array();
// multiple token remove
// remove () ; -  . \n
$delim = " \n.,;-()";
$tok = strtok($content, $delim);
while ($tok !== false) {
  $words[] = $tok;
  $tok = strtok($delim);
}
$unique_words = array_unique($words);

print "<pre>";
print_r($unique_words);
print "</pre>";

echo "<hr/>";

$input = "tutorials point@ and simple@ easy learning.";
$token = strtok($input, "@");

while ($token !== false){
    echo "$token<br>";
    $token = strtok("@");
}
// very good work with token like / \n \t @ # $ ^ *  () etc


echo "<hr/>";

$input = "tutorials point and simple easy and learning.";
$token = strtok($input, "and");

while ($token !== false){
    echo "$token<br>";
    $token = strtok("and");
}

echo "<hr/>";
?>