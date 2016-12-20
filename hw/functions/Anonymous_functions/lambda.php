<h1>A lambda function (also known as anonymous function) is a function that has:
<br/>
    * :No Name
   * : Can be assigned to a variable
    * : <span style="color:darkred">Can be passed as argument to other functions or methods of a class</span></h1>
<?php


function countEmails($multiply, $a, $b) {
    echo 'you have ' . $multiply($a, $b) . ' emails!';
}

$multiply = function ($a, $b) {
    return $a * $b;
};
//passed as argument to other functions
echo countEmails($multiply, 2, 5); // you have 10 emails!

// see anonymous function file

echo "<h1> assign in array</h1>";

$array['multiply'] = function ($a, $b) {
    return $a * $b;
};

echo $array['multiply'](2, 10); // 20

echo "<h1> even an object:</h1>";

$obj = new StdClass();

$obj->multiply = function ($a, $b) {
    return $a * $b;
};

$multiply = $obj->multiply;
echo $multiply(22, 10); // 20