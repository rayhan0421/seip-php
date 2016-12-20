<?php


$str = 'abcdef';
echo $str[0];

echo "<hr/>";

function Reverse($str){
    //char reverse
    // read every char

    for($i=strlen($str)-1; $i>=0; $i--){

        echo $str[$i];

    }

}



$str="hello world";

Reverse($str);

echo "<hr/>";

$email  = 'name@example.com';
$domain = strstr($email, '@',false);
echo $domain."<br/>"; // prints @example.com

// use thired parameter true
$user = strstr($email, '@', true); // As of PHP 5.3.0
echo $user; // prints name