<h1>anonymous function based on information gathered at run time. This allows for greater flexibility, without too much extra coding.</h1>
<pre>
<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 22-12-2016
 * Time: 05:15 PM
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

function makeSortFunction($field)
{
    $code = "return strnatcmp(\$a['$field'], \$b['$field']);";
    return create_function('$a,$b', $code);
}

//$compare = makeSortFunction('age');
//usort($data, $compare);
// or
usort($data, makeSortFunction('age'));

print_r($data);
echo "<hr/>";
/*simple code wrap
 *
 *
 *  function orderBy($data, $field)
  {
    $code = "return strnatcmp(\$a['$field'], \$b['$field']);";
    usort($data, create_function('$a,$b', $code));
    return $data;
  }

  $sorted_data = orderBy($data, 'age');
 */
// another way
echo "<h2>another way</h2>";
function orderBy($data, $field)
{
    $code = "return strnatcmp(\$a['$field'], \$b['$field']);";
    usort($data, create_function('$a,$b', $code));
    return $data;
}

$sorted_data = orderBy($data, 'age');

var_dump($sorted_data);

//also another way
// pass reference
// for simplify usort
function orderBy_ref(&$data, $field)
{
    $code = "return strnatcmp(\$a['$field'], \$b['$field']);";
    usort($data, create_function('$a,$b', $code));
}

orderBy_ref($data, 'age');

echo "<h1> Multiple row sorting using a closure</h1>";


function sortArray($data, $field)
{
    if(!is_array($field)) $field = array($field);
    usort($data, function($a, $b) use($field) {
        $retval = 0;
        foreach($field as $fieldname) {
            if($retval == 0) $retval = strnatcmp($a[$fieldname],$b[$fieldname]);
        }
        return $retval;
    });
    return $data;
}

$data = sortArray($data, 'age');

echo "<hr/>";
echo "sort array : <br/>";
print_r($data);
echo "<hr/>";

echo "with order multi<br/>";
$data = sortArray($data, array('lastname', 'firstname'));

var_dump($data);
//
