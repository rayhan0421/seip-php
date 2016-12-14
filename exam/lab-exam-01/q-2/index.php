<?php

echo "<h1>q-2</h1>";

$a = "bangladesh";
echo "<br/>";

echo 'varibale type : '. gettype($a);
echo "<br/>";


if(isset($a)){

    echo " I love bangladesh";
    echo "<br/>";
}
echo "<br/>";

if(!is_object($a)){

    echo "<br/>";
    echo " opps ! this is not a object";

    echo "<br/>";
}

echo "varible type is :";
echo "<br/>";
var_dump($a);
echo "<br/>";

if(is_array($a)){

    echo "yes this is array";
}else{

    echo "a is not array";
}
echo "<br/>";



