<?php

$a=10;
$b = 22;
//swap

// swap array

//swap with list

echo "\$a : ". $a;
list($a,$b) = array($b,$a);

echo " <br/> after swap now \$a : ".$a;

echo "<hr/>";
// make swap function make
function swapValues(&$a, &$b) {
    list($b, $a) = array($a, $b);
}
$a = 10;
$b = 20;
swapValues($a, $b);

echo $a;
echo '<br>';
echo $b;


echo "<hr/>";

$var1 = "var1";
$var2 = "var2 ";
function swap(&$var1, &$var2) {
    $tmp = $var1;
    $var1 = $var2;
    $var2 = $tmp;
}

swap($var1,$var2);
echo "var1 : ". $var1;

echo "<hr/>";

echo "another simple method : <br/>";

$a=122;
$b=343;
echo "\$a : ".$a . "<br/>";
echo "\$b : ".$b . "<br/>";


extract(array('a'=>$b,'b'=>$a));
echo "<br/>after swap now : ";
echo '$a='.$a.PHP_EOL;
echo '$b='.$b;