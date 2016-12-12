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
echo "<h1> compare decreament oparator</h1>";
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


echo "<h1> increament decreament oparator</h1>";

echo 'before increament of  $x '.$x . "<br/>";
$x++;

echo 'after increament of $x '.$x . "<br/>";
echo $x;
echo "<br/>";

echo 'before decreament of $y '.$y . "<br/>";
--$y;
echo 'after decreament of $x '.$y . "<br/>";
echo $y ."<br/>";

$y=12;

echo ' before decreament of $y : '. $y."<br/>";
$y--;
echo ' after decreament of $y-- is : '.$y."<br/>";

echo  $y ."<br/>";

echo "<h1> logical oparator</h1>" ."<br/>";


var_dump(!$x==10);

echo '<br/>';
if ($x !== 2017) {
    echo "Hello world!";
}

if($x==3 xor $y==10){

    echo " <br/> True if either $x or $y is true, but not both";
}elseif($x==3 xor $y==11){

echo "<br/> true here cause : only one or y var is true ";
}else{

echo " default";
}


echo "<br/> <h1>string oparator : </h1>";

// .  for concatanet
echo "<br/>".'$x'.'$y';

$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;
