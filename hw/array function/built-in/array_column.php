<b>Get all values of a specific column in a multidimensional array ???</b>
<h1>we can get specific key, values from multidimensional arrays using the array_column() function.</h1>

<b>only work with associative array</b>
<br/>
<pre>
    <hr/>

<?php
//array array_column ( array $input ,$column_key ,$index_key)

// minimum 2 argument requird
$users = array (
    'Imtiaz Rayhan' => array (
        "id" => 10,
        "Address" => 'Bangladesh',
        "Occupation" => 'Student'
    ),
    'John Doe'      => array (
        "id" => 20,
        "Address" => 'Earth',
        "Occupation" => 'Freelancer'
    ),
    'Istiak Rayhan' => array (
        "id" => 30,
        "Address" => 'Bangladesh',
        "Occupation" => 'Blogger')
);

$users_works = array (
    array (
        "id" => 10,
        "Address" => 'Bangladesh',
        "Occupation" => 'Student'
    ),
     array (
        "id" => 20,
        "Address" => 'Earth',
        "Occupation" => 'Freelancer'
    ),
     array (
        "id" => 30,
        "Address" => 'Bangladesh',
        "Occupation" => 'Blogger')
);

$address = array_column($users, 'Address');

print_r($address);
echo "<br/> We didn’t provide any index key here. So, by default it used the numeric index key with the values.";

echo "<hr/>";

$occupation = array_column($users, 'Occupation', 'id');
echo "with index key<br/>";
print_r($occupation);
echo "<hr/>";
echo "another way <br/>";
//php4 <5.5
$_Occupation = array_map(function ($value) {
    return  $value['Occupation']." solve with array_map but better array_column . has index facilty simply";
}, $users_works);

print_r($_Occupation);
echo "<hr/>";

echo "<br/>single dimensional array ??????????<br/>";

$array1_not_works = array("a" => "green", "b" => "brown", "c" => "blue");
// will not work .........
$add = array_column($array1_not_works, 'green');

print_r($add);