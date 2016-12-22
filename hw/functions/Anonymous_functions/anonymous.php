<h1>callback</h1>

<?php
// $abc work as function


function get($abc){

   echo $abc();
}

// $abc pass as function
get(function(){

    return "hello world";
} );

//
echo "<hr/>";
echo "<hr/>";
echo "<hr/>";echo "<hr/>";
echo "<hr/>";echo "<hr/>";echo "<hr/>";echo "<hr/>";
echo "<h1>with variable pass</h1>";
//variable pass

function getName($abc){
     // $abc accept a function so declare function with bracket
    echo $abc();
}

$name = "world with var";
// $abc pass as function
getName(function() use ($name){

    return "hello $name";
} );