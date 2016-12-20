<h1> The substr_compare() function compares two strings from a specified start position.</h1>

<?php

$equal = substr_compare("You won't believe it, but this comparison is equal", "comparison is equal", 31);

if($equal == 0){
    echo 'The substrings are equal!';
}


echo "<hr/>";
echo substr_compare("world","or",1,2);
echo "<br/>";
echo substr_compare("world","ld",-2,2);
echo "<br/>";
echo substr_compare("world","orl",1,2);
echo "<br/>";
echo substr_compare("world","OR",1,2,TRUE);
echo "<br/>";
echo substr_compare("world","or",1,3);
echo "<br/>";
echo substr_compare("world","rl",1,2);
echo "<br/>";
echo substr_compare("Hello world","world",6);

echo "<br/>";
echo substr_compare("hello world","hello ",0,5);

echo "<br/>";

echo substr_compare("hello world","world",6,10);

echo "<hr/>";

echo substr_compare("Hello world!","Hello world!",0); // the two strings are equal

echo "<br/>";
echo substr_compare("Hello world!","Hello",0); // string1 is greater than string2

echo "<br/>";
echo substr_compare("Hello world!","Hello world! Hello!",0); // str1 is less than str2

echo "<br/>";