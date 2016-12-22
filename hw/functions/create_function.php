<h1>The goal is to create function dynamically. Not replacing manual declaration, otherwise I agree that would not be really useful.</h1>

<hr/>

<?php
// closure better than create_function()
//create_function( ):

//problem : security issue like eval()

//it has bad performance and memory usage characteristics.

$add = create_function('$i,$j', 'return $i+$j;');

$add(1, 1); // returns 2








echo "<h1> <br/>closure way :</h1>";
//closure way

$f = function ($out) {
    echo $out;
};

$f("Welcome");