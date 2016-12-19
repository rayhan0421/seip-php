<pre>
<?php

$myarr = array("A","B","C",12);

$myarr2 = [
    "A","B","C",12
];

// echo must use index number

print_r($myarr);

// echo $myarr2[2];
echo "<hr/>";
print_r($myarr2);


echo "<hr/>";

echo "associative array : ";
// associative array

$as_arr = array("name"=>"google","second_name"=>"yahoo","10"=>"number","number2");

// if we define key as number number will increase from there

// see exmple index number 10 and 11

print_r($as_arr);

echo "<hr/>";

$as_arr = array("name"=>"google","second_name"=>"yahoo","city",""=>"code2017");

// null key can be define
print_r($as_arr);


$blog = array("news","sports","enertaiment");

$country= ["bd","pr",$blog];

$city = array("dhaka","ctg","khulna"=>$country);

print_r($city);

echo $city["khulna"][0];



?>

    </pre>
