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

echo $var;



echo "varible has been removed";

// print_r vs echo

$arr = array();

echo $arr;
// we cannot print array like that

print_r($arr);

// we use print_r instead of echo for array type varibale