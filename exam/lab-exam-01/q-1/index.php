<?php 

echo " <h1>Question : write two example for each of the following functions(10)</h1>";

echo "<br/>";

$x= 10.25;
$f= 10;

$arr = array("abc","xay","kbc");

$null= null;

class abc
{
	
	
} 

$obj = new abc();
$y = true;



echo "floatval : ";
//float value
echo floatval($x);
 echo "<br/>";
echo floatval($f);
echo "<br/>";
echo '$arr is : ' .is_array($arr)." array type ";

if(is_array($arr)) {
    echo "<br/>";
    echo "array type variable";
    echo "<br/>";
}

if(!is_array($x)) {
    echo "<br/>";
    echo "array type not variable";
    echo "<br/>";
}

if(is_null($null)) {
    echo "<br/>";
    echo "null type variable";
    echo "<br/>";
}

if(is_null($x)) {
    echo "<br/>";
    echo "not null type variable";
    echo "<br/>";
}

if(is_object($obj)) {
    echo "<br/>";
    echo "object type variable";
    echo "<br/>";
}

if(is_object($x)) {
    echo "<br/>";
    echo " not object type variable";
    echo "<br/>";
}
echo "<br/>";
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<br/>";
echo "<pre>";
print_r($x);
echo "</pre>";
// it show index with value;
echo "<br/>";

$ser =  serialize($arr);
echo "<br/>";
echo $ser;
// return string;
echo "<br/>";
echo "<pre>";
$uns= unserialize($ser);
// return string to array;
print_r($uns);
echo "</pre>";
echo "<br/>";
unset($x);
echo "<br/>";
echo $x;
echo "<br/>";
// we remove $x;



if(is_bool($y)) {
    echo "<br/>";
    echo "bool type variable";
    echo "<br/>";
}

if(!is_bool($x)) {
    echo "<br/>";
    echo "not bool type variable";
    echo "<br/>";
}

if(is_float($f)) {
    echo "<br/>";
    echo "float type variable";
    echo "<br/>";
}else{

    echo "<br/>";
    echo "float is not type variable";
    echo "<br/>";
}




