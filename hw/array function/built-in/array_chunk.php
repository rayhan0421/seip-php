<h1>return a multi dimentnal array with numeric index array , starting with 0 index , contain size element . </h1>
<hr/>



<h3>function has 3 parameters</h3>

<li>1st parameter for array pass </li>
<li>2nd parameter for size how much element contain each  array (cause it convert to multi-dimentional array) </li>

<li>3rd true / false</li>

<hr/>
<pre>
<?php


$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
print_r($age);
echo "<hr/>";

echo "after chunk : <br/>";
print_r(array_chunk($age,2,true));

echo "<hr/>";

$array = array(
    array("sku" => 1,
        "image" => "1-gbc.jpg",
        "ib575037.jpg" => "1 GBC EB100000" ),
    array("sku" => 2,
        "image" => "ib575037.jpg",
        "image label" => "2 IB575037" ),
    array("sku" => 3,
        "image" => "s0190303-paper-mate.jpg",
        "image label" => "3 Paper Mate S0190303" ),
);

$array = array_chunk($array, 2);

foreach($array as $chunk)
{
    foreach($chunk as $subarray)
    {
        echo "<pre>";
        print_r($subarray);
        echo "</pre>";
    }
}

echo "<hr/>";


echo "<h1>associative convert to numeric muidimentional array with array chunk with size 2 : </h1><br/>";
$marks = array(
    "mohammad" => array (
        "physics" => 35,
        "maths" => 30,
        "chemistry" => 39
    ),

    "qadir" => array (
        "physics" => 30,
        "maths" => 32,
        "chemistry" => 29
    ),

    "zara" => array (
        "physics" => 31,
        "maths" => 22,
        "chemistry" => 39
    )
);

$array = array_chunk($marks, 2);

print_r($array);