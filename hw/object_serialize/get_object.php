<?php
include "ser_object.php";

/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 02-01-2017
 * Time: 08:32 PM
 */

$d = file_get_contents('store.php');

$d =unserialize($d);

var_dump(is_array($d));

foreach ($d as $v){


}

//$un = unserialize($d);

// $un->show_one();

