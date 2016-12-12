<?php

$price = null;

if(isset($price)){

    echo "price is $price";
}


$var =10;

echo $var;
// to remove variable we use unset();

//unset use most of the time in session and temporary data handling area
unset($var);

//echo $var;



echo "varible has been removed";

// print_r vs echo

$arr = array();
if(is_array($arr)) {
  print_r($arr);
// we cannot print array like that
}else{

    echo $arr;
}
print_r($arr);

// we use print_r instead of echo for array type varibale

var_dump($arr);

// show detail variable info

if(is_array($arr)){

    print_r($arr);
}else{

    echo $arr;
}
//


$arr2 = array("a","g", "s");


// serialise convert array to string . we can store data in database
// unserialize convert string to array

$s= serialize($arr2);
echo  gettype($s);

echo $s;
$un= unserialize($s);

echo gettype($un);

echo "<br/>";
define("varibale","value here");

define("year","2017",true);
// constatnt variable
echo varibale;
echo "<br/>";
echo year;

//define(name, value, case-insensitive)

//name: Specifies the name of the constant
//value: Specifies the value of the constant
//case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false