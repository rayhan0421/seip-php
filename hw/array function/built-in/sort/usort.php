<pre>
    <h1>usort : Sort an array <b>by values</b> using a user-defined comparison function.</h1>

<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 22-12-2016
 * Time: 04:38 PM
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
  usort($data, 'compare_lastname');

echo "<hr/>";

echo "<h1>Sorting on multiple fields</h1>";

//multiple column
function compare_firstname_m($a, $b)
{
    return strnatcmp($a['firstname'], $b['firstname']);
}

function compare_lastname_m($a, $b)
{
    return strnatcmp($a['lastname'], $b['lastname']);
}

// sort alphabetically by firstname, then by lastname
usort($data,'compare_firstname_m');
usort($data, 'compare_lastname_m');
echo "<hr/>";

function compare_fullname($a, $b)
{
    // sort by last name
    $retval = strnatcmp($a['lastname'], $b['lastname']);
    // if last names are identical, sort by first name
    if(!$retval) $retval = strnatcmp($a['firstname'], $b['firstname']);
    return $retval;
}

// sort alphabetically by firstname and lastname
usort($data,'compare_fullname');

var_dump($data);


echo "<hr/>";
// from stackoverflow
$order = array(
    3452342,
    5867867,
    7867867,
    1231233
);
$array = array(
    array("id" => 7867867, "title" => "Must Be #3"),
    array("id" => 3452342, "title" => "Must Be #1"),
    array("id" => 1231233, "title" => "Must Be #4"),
    array("id" => 5867867, "title" => "Must Be #2"),
    array("id" => 1111111, "title" => "Dont Care #1"),
    array("id" => 2222222, "title" => "Dont Care #2"),
    array("id" => 3333333, "title" => "Dont Care #3"),
    array("id" => 4444444, "title" => "Dont Care #4")
);
function custom_compare($a, $b){
    global $order;
    $a = array_search($a["id"], $order);
    $b = array_search($b["id"], $order);
    if($a === false && $b === false) { // both items are dont cares
        return 0;                      // a == b
    }
    else if ($a === false) {           // $a is a dont care item
        return 1;                      // $a > $b
    }
    else if ($b === false) {           // $b is a dont care item
        return -1;                     // $a < $b
    }
    else {
        return $a - $b;
    }
}
shuffle($array);  // for testing
var_dump($array); // before
usort($array, "custom_compare");
var_dump($array); // after