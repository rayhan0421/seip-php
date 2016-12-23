
<h1>Compare the <span style="color:darkred">keys</span> of two arrays, and return the differences:</h1>
<b>see this for more .. array_diff_assoc()</b>
<h1>array_diff_key(array1,array2,array3...);</h1>
<pre>
<?php

/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 23-12-2016
 * Time: 08:22 PM
 */

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
// all diff with 1st argument or $a1 or array

$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_diff_key($a1,$a2);
print_r($result);
echo "<hr/>";

echo "<h1>associative array:</h1>";

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


$result=array_diff_key($contacts,$contacts2);
print_r($result);