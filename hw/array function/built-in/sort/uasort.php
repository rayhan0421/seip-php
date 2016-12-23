<h1>To maintain index association, replace usort with  uasort in the code:</h1>

<h1>uasort : This is used mainly when sorting associative arrays where the actual element order is significant.</h1>
<h3>Sort an array with a user-defined comparison function and <b> maintain index </b> association</h3>
<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 22-12-2016
 * Time: 04:52 PM
 */

$data = array(
    array("firstname" => "Mary", "lastname" => "Johnson", "age" => 25),
    array("firstname" => "Amanda", "lastname" => "Miller", "age" => 18),
    array("firstname" => "James", "lastname" => "Brown", "age" => 31),
    array("firstname" => "Patricia", "lastname" => "Williams", "age" => 7),
    array("firstname" => "Michael", "lastname" => "Davis", "age" => 43),
    array("firstname" => "Sarah", "lastname" => "Miller", "age" => 24),
    array("firstname" => "Patrick", "lastname" => "Miller", "age" => 27)
);

function compare_lastname($a, $b)
{
    return strnatcmp($a['lastname'], $b['lastname']);
}

//To sort by different fields just replace the  compare_lastname function with a function that orders by firstname

// sort alphabetically by name
uasort($data, 'compare_lastname');



echo "<hr/>";