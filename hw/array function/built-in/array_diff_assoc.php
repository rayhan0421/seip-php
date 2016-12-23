<h1>show/return difference one with <i style="color:red">key</i>.....not match one</h1>
<h1>Compare the keys and values of two arrays, and return the differences:</h1>
<h1>Computes the difference of arrays with additional <b>index</b> check</h1>
<h3>note:This function only checks one dimension of a n-dimensional array. Of course you can check deeper dimensions by using, for example, array_diff_assoc($array1[0], $array2[0]);.</h3>
<pre>

array_diff() - Computes the difference of arrays
array_diff_uassoc() - Computes the difference of arrays with additional index check which is performed by a user supplied callback function
array_udiff_assoc() - Computes the difference of arrays with additional index check, compares data by a callback function
array_udiff_uassoc() - Computes the difference of arrays with additional index check, compares data and indexes by a callback function
array_intersect() - Computes the intersection of arrays
array_intersect_assoc() - Computes the intersection of arrays with additional index check
</pre>

<hr/>
<p> output </p>
<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 23-12-2016
 * Time: 07:14 PM
 */

//array array_diff_assoc ( array $array1 , array $array2 [, array $... ] )

//array_diff_assoc — Computes the difference of arrays with additional index check

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
// $array1 is parant means 1st parameter
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_assoc($array1, $array2);
print_r($result);
?>
<h1> recursive diff </h1>
<p>another way advanced</p>
<?php

function array_diff_assoc_recursive($array1, $array2) {
    $difference=array();
    foreach($array1 as $key => $value) {
        if( is_array($value) ) {
            if( !isset($array2[$key]) || !is_array($array2[$key]) ) {
                $difference[$key] = $value;
            } else {
                $new_diff = array_diff_assoc_recursive($value, $array2[$key]);
                if( !empty($new_diff) )
                    $difference[$key] = $new_diff;
            }
        } else if( !array_key_exists($key,$array2) || $array2[$key] !== $value ) {
            $difference[$key] = $value;
        }
    }
    return $difference;
}
echo "<pre>";
var_dump( array_diff_assoc_recursive( $array1, $array2 ) );

$a1=array( 'a' => 0, 'b' => null, 'c' => array( 'd' => null ) );
$a2=array( 'a' => 0, 'b' => null );

 $contacts = array(
    array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    ),

   array(
       "id"=>"100",
       "name"=>"rayhan",
   ),
);

$contacts2 = array(
    array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
echo "<br/>see multidimentional assoc array :<br/>";

// id is not match
var_dump( array_diff_assoc_recursive( $contacts, $contacts2 ) );

echo "<hr/>";

echo "<h1>array diff key</h1>";

var_dump(array_diff_key($contacts, $contacts2));

?>

