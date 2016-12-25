<pre>
extract — Import variables into the current symbol table from an array


compact — Create array containing variables and their values


<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 25-12-2016
 * Time: 10:05 PM
 */
// compact
$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$location_vars = array("city", "state");

$result = compact("event", "nothing_here", $location_vars);
print_r($result);

echo "<hr/>";

echo "extract : <br/>";

$var_array = array("color" => "blue",
    "size"  => "medium",
    "shape" => "sphere");
extract($var_array);
// convert array key to variable
echo " size is ".$size." . ". " shape is : ".$shape;
