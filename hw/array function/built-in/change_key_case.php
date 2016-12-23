<h1>Changes the case of all keys in an array</h1>
<h2>array array_change_key_case ( array $array [, int $case = CASE_LOWER ] ) </h2>
<li>upper </li><li> lower</li>
<b> Numbered indices are left as is(no change). only aplpa</b>
<hr/>
<?php
echo "<hr/>";
$array = array(
    '!AccountNumber' => '00000000',
    'Address' => array(
        '!Line1' => '10 High Street',
        '!line2' => 'London'));
//
$input_array = array("FirSt" => 1, "SecOnd" => 4,"keY"=>"code2017",12=>"number");

echo "orginal : <br/>";

print_r($input_array);
echo "<hr/>";
echo "after key case change <br/>";


print_r(array_change_key_case($input_array, CASE_UPPER));

echo "<h1>same key in array will accept last one see output: <br/></h1>";


echo "<hr/>";

// if same key in array key override with last one
$input_array = array("FirSt" => 1, "SecOnd" => 4,"keY"=>"code2017","keY"=>"2016","key"=>"1000bc");

echo "orginal : <br/>";

print_r($input_array);
echo "<hr/>";
echo "after key case change <br/>";


print_r(array_change_key_case($input_array, CASE_LOWER));

echo "<hr/>";

echo "<h2>multi dimentional:</h2>";
// multi- dimentional
function array_change_key_case_recursive($arr)
{
    return array_map(function($item){
        if(is_array($item))
            $item = array_change_key_case_recursive($item);
        return $item;
    },array_change_key_case($arr));
}

print_r(array_change_key_case_recursive($array));
echo "<hr/>";
echo "<h1>to convert value lower to upper, upper to lower </h1>";

echo "<b>use array_map </b> <br/>";

$yourArray = array_map('strtolower', $input_array);

echo "<b> use array_walk</b> <br/>";

array_walk($input_array, function(&$value)
{
    $value = strtolower($value);
});

echo "<b> use foreach</b> <br/>";

foreach($input_array as &$value)
    $value = strtolower($value);