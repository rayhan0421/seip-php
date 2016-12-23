<pre>
<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 23-12-2016
 * Time: 10:56 AM
 */

$fullarray = array("a" => 2, "b" => 4, "c" => 2, "d" => 5, "e" => 6, "f" => 2);

$newArray = array_intersect_key(
    $fullarray,
    array_flip(array_keys($fullarray, 2))
);

print_r($newArray);