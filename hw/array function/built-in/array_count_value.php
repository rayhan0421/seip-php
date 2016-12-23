<h1>array_count_value :   count array element and return array with number of value not value and value turn into key</h1>
<pre>
<?php

$single_arr= array("rayhan","rayhan","karim","abul");

$arr = array(array('item' => 'Banana Cream Cheesecake',
    'item_id' => 3,
    'product' => 'Desserts'),
    array('item' => 'Banana Cream Cheesecake',
        'item_id' => 3,
        'product' => 'Desserts'),
    array('item' => 'Banana Cream Cheesecake',
        'item_id' => 3,
        'product' => 'Desserts'),
    array('item' => 'Banana Cream Cheesecake',
        'item_id' => 3,
        'product' => 'Desserts'),
    array('item' => 'Milk',
        'item_id' => 2,
        'product' => 'Soda'),
    array('item' => 'Banana Cream Cheesecake',
        'item_id' => 3,
        'product' => 'Desserts'));

$counted = array_count_values(array_map(function($value){return $value['item'];}, $arr));
// see key in out carefully
//value converted to key then store number of value in that key
//echo $counted['Banana Cream Cheesecake'];
echo "<h1>multi dimentional/associative</h1>";
print_r($counted);

echo "<hr/>";

// or another way
// return value change
$counted = array_count_values(array_map(function($value){return $value['item_id'];}, $arr));
// The item_id
//echo $counted['3'];

print_r($counted);

echo "<hr/>";

echo "<h1>single dimention array_count_value</h1>";

$input = array("orange", "mango", "banana", "orange" );
print_r(array_count_values($input));


echo "<br/>";
echo "then specific value count: ";

echo array_count_values($input)['orange'];
