<pre>
    <h1>If the optional search_value is specified, then only the keys for that value are returned.
        Otherwise, all the keys from the array are returned.</h1>
<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 25-12-2016
 * Time: 08:51 PM
 */
$your_array = array(
    array(
        'action' => 'A',
        'id' => 1,
        'base' => array('id' => 145),
    ),
    array(
        'action' => 'B',
        'id' => 2,
        'base' => array('id' => 145),
    ),
    array(
        'action' => 'C',
        'id' => 3,
        'base' => array('id' => 145),
    )
);

$your_keys = array_keys($your_array[0]);
//var_dump($your_keys);
echo "<hr/>";


//other way
$k=array();
foreach($your_array as $array){
    foreach($array as $key=>$value){
       $k[]= $key;
    }
}
$k =array_unique($k);
print_r($k);

