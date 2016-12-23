<h1>Apply a user function recursively to every member of an array</h1>

<b>has callback user defind function <br/></b>
<h2>this function will recurse into deeper arrays.</h2>


<hr/>

<hr/>
<hr/>
<hr/>
<hr/>

<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 23-12-2016
 * Time: 11:36 AM
 */

$sweet = array('a' => 'apple', 'b' => 'banana');
$fruits = array('sweet' => $sweet, 'sour' => 'lemon');

$result = array();
function test_print($item, $key)
{
   global $result ;
    $result[] =  "$key holds $item <br/>";
    // remove global var if use echo uncomment
    //echo "$key holds $item <br/>";
}
echo "<pre>";
//Returns TRUE on success or FALSE on failure.
print_r(array_walk_recursive($fruits, 'test_print'));
echo "<br/>";
var_dump($result);

echo "<hr/>";
echo " ways simple<br/>";
// may be with possible    RecursiveArrayIterator ,RecursiveIteratorIterator

function array_values_recursive($array) {
    $flat = array();

    foreach($array as $value) {
        if (is_array($value)) {
            $flat = array_merge($flat, array_values_recursive($value));
        }
        else {
            $flat[] = $value." after modified .";
        }
    }
    return $flat;
}

print_r(array_values_recursive($fruits));