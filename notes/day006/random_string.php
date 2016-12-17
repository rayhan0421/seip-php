<?php


echo "<h1>String Function Practice </h1>";

$my_array = array("red","green","blue","yellow","purple");
print_r($my_array);
echo "<hr/>";
shuffle($my_array);
echo "after shuffle : ";
print_r($my_array);

echo "<hr/>";

echo str_shuffle("Hello World");

echo "<hr/>";

echo rand(5, 15);

echo "<hr/>";

$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";

echo "<hr/>";
echo "reverse from end : "."<br/>";
echo strrev("Hello world!");
echo "<br/>";
$str = "Is your name O'Reilly?";

// Outputs: Is your name O\'Reilly?
echo addslashes($str);


