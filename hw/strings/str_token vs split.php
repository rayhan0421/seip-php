<?php

$string = "Rayhan ,uddin ,i, love bangladesh";
/* Use tab and newline as tokenizing characters as well  */
$tok = strtok($string, ",");

print_r($tok);
echo "<br/> type : ".gettype($tok);
// for single
echo "<hr/>";

// for all
while ($tok !== false) {
    echo "Word=$tok<br />";
    $tok = strtok(",");
}


echo ""."<br/>";

// remove token or specific char string

$first_token  = strtok('/somethin/g', '/');
// we can use space as token
$second_token = strtok('/');
var_dump($first_token, $second_token);

echo "<hr/>";
echo "<pre>";
//string to an array.
print_r(str_split($string,3));
echo "</pre>";

echo "<br/>"."simple example";

$str = "Hello Friend";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);
echo "<pre>";
echo "without argument it take 1 char to array"."<br/>";
print_r($arr1);

echo "with argument it take 3 char to array and // space is a char "."<br/>";
print_r($arr2);
echo "</pre>";