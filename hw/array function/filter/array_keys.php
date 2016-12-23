<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 23-12-2016
 * Time: 10:55 AM
 */
$array = array('a'=>2,'b'=>4,'c'=>2,'d'=>5,'e'=>6,'f'=>2);

foreach (array_keys($array) as $key) {
    if ($array[$key] != 2)  {
        unset($array[$key]);
    }
}

print_r($array);