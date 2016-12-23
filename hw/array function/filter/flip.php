<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 23-12-2016
 * Time: 01:11 AM
 */



$a = array(
    0      => "val 0",
    "one"  => "val one",
    "two"  => "val two",
    "three"=> "val three",
    "four" => "val four",
    "five" => "val five",
    "6"    => "val 6"
);

$f = array_filter(array_keys($a), function ($k){ return strlen($k)>=4; });
$b = array_intersect_key($a, array_flip($f));
print_r($b);


echo "<hr/>";
var_dump(array_intersect_key($my_array, array_flip($allowed)));

echo "<hr/>";

echo "another way <br/>";

$my_array = array("foo" => 1, "hello" => "world");
$allowed = array("foo", "bar");
$result = array_flip(array_filter(array_flip($my_array), function ($key) use ($allowed)
{
    return in_array($key, $allowed);
}));
var_dump($result);

echo "<hr/>";

$array = ['apple' => 'red', 'pear' => 'green'];
reset($array); // Unimportant here, but make sure your array is reset

$apples = array_filter($array, function($color) use ($&array) {
    $key = key($array);
    next($array); // advance array pointer

    return key($array) === 'apple';
}
//simple another way alter of imediate up

$apples = array_filter($array, function($color) use ($&array) {
    return each($array)['key'] === 'apple';
}

