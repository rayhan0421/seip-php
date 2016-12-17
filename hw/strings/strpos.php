<?php

function strpos_all($haystack, $needle) {
    $offset = 0;
    $allpos = array();
    while (($pos = strpos($haystack, $needle, $offset)) !== FALSE) {
        $offset   = $pos + 1;
        $allpos[] = $pos;
    }
    return $allpos;
}
echo "<pre>";
print_r(strpos_all("aaa bbb aaa bbb aaa bbb", "aa"));
echo "</pre>";

echo "<br/>";

// strpos all match
$str_test = "Hello World! welcome to php";

$count = 0;
$find = "o";
$positions = array();
for($i = 0; $i<strlen($str_test); $i++)
{
    $pos = strpos($str_test, $find, $count);
    if($pos == $count){
        $positions[] = $pos;
    }
    $count++;
}
foreach ($positions as $value) {
    echo '<br/>' .  $value . "<br />";
}

//string all match