<h1>callback php interesting topics</h1>
<h1> see sepacially in array_map()</h1>

<?php

function nameToGreeting( $name ) {
    return "Hello " . ucfirst( $name ) . "!";
}

// ...then map the callback function to elements in an array.
$names = array( "fred", "mary", "sally" );
echo "<pre>";
print_r( array_map('nameToGreeting', $names ) );

echo "<hr/>";
$after_map =  array_map('nameToGreeting', $names );

foreach ($after_map as $func){

    echo $func."<br/>";
}

//  inline anonymous function

echo "<h1> inline function</h1>";

$name2 = array("rayhan","aslam","abul","babul",1254);
// $name comes from up
print_r ( array_map( function( $name2 ) {
    return "Hello :" . ucfirst( $name2 ) . "!";
}, $name2 ) );

echo "<hr/>";

echo "<h1> Custom array sorting with usort()</h1>";

$people = array(
    array( "name" => "Fred", "age" => 39 ),
    array( "name" => "Sally", "age" => 23 ),
    array( "name" => "Mary", "age" => 46 )
);

usort( $people, function( $personA, $personB ) {
    return ( $personA["age"] < $personB["age"] ) ? -1 : 1;
} );

print_r( $people );


echo "<h1> use keyword</h1>";
// sorting array by name and age
$people = array(
    array( "name" => "Fred", "age" => 39 ),
    array( "name" => "Sally", "age" => 23 ),
    array( "name" => "Mary", "age" => 46 )
);

function getSortFunction( $sortKey ) {
    return function( $personA, $personB ) use ( $sortKey ) {
        return ( $personA[$sortKey] < $personB[$sortKey] ) ? -1 : 1;
    };
}

echo "Sorted by name:<br><br>";
usort( $people, getSortFunction( "name" ) );
print_r( $people );
echo "<br>";

echo "Sorted by age:<br><br>";
usort( $people, getSortFunction( "age" ) );
print_r( $people );
echo "<br>";