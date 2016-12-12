<?php


$x=10;
$y=3;

$z=2;

echo $x**$y."<br/>";
// $x power of $y

echo ' $x : '. $x." <br/>";
$x = $y;
echo 'now $x :';
//cause $y assign in $x;
echo $x."<br/>";
// it (%) return devide result
echo $x%$y."</br>";
// it (/) return fraction
echo $x/$y;

// compare operator
echo "<br/>";
var_dump($x<>$y);
echo "<br/>";
//<> return bool true or false
echo "!== : "."<br/>";
var_dump($x!==$y);

// !== return bool $x is equal to $y or not
echo "<br/>";
var_dump($x===$y);
// return bool with variable type
