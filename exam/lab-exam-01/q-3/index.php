<?php

echo "<h1>q - 3</h1>";

$str= "i love my mother";
$arr =array();

for($i=0;$i<strlen($str);$i++){
   $arr[$i] = $str[$i];
   //echo $str[$i];

}

//var_dump($arr);
echo "<pre>";
print_r(str_split($str));

echo "</pre>";