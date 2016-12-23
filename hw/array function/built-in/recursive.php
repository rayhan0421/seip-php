<?php
//flat array
//flatten
$a = array(1,2,array(3,4, array(5,6,7), 8), 9);
$it = new RecursiveIteratorIterator(new RecursiveArrayIterator($a));
foreach($it as $v) {
    echo $v, " ";
}


echo "<hr/>";
// from stackoverflow
$array = [
    'name' => 'Allen Linatoc',
    'profile' => [
        'age' => 21,
        'favourite_games' => [ 'Call of Duty', 'Titanfall', 'Far Cry' ]
    ]
];

function flatten_array(array $array)
{
    return iterator_to_array(
        new \RecursiveIteratorIterator(new \RecursiveArrayIterator($array)));
}


$flat = iterator_to_array(
    new \RecursiveIteratorIterator(new \RecursiveArrayIterator($array)));
//usage



print_r( flatten_array($array) );

echo "<hr/>";echo "<hr/>";echo "<hr/>";

var_dump($flat);
/*
 *
 *
 *
   function _flatten_array($arr) {
while ($arr) {
    list($key, $value) = each($arr);
    is_array($value) ? $arr = $value : $out[$key] = $value;
    unset($arr[$key]);
}
return (array)$out;
}


 *
 *
 *
 */


