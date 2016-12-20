<h1>notes: If the start parameter is a negative number and length is less than or equal to start, length becomes 0.</h1>
<hr/>

<?php
//substr_replace(string,replacement,start,length)
echo substr_replace("Hello","world",0);


echo "<br/>";

$replace = array("1: AAA","2: AAA","3: AAAA","mew-mew");

echo "<pre>";
echo "replace word list : <br/>";
print_r($replace);
echo "<br/>";
echo implode("<br>",substr_replace($replace,'BBB',3,3));

echo "<hr/>";

$replace = array("1: AAA","2: AAA","3: AAAA","mew-mew");

echo "<pre>";
echo "replace word list ater change range 1 to 3 : <br/>";
print_r($replace);
echo "<br/>";
echo implode("<br>",substr_replace($replace,'BBB',1,3));



echo "<hr/>";

$replace = array("1: AAA","2: AAA","3: AAAA","mew-mew");

echo "<pre>";
echo "replace word list ater change range 0 to 3 : <br/>";
print_r($replace);
echo "<br/>";
echo implode("<br>",substr_replace($replace,'BBB',0,3));
// add string before long text;
echo "<hr/>";
echo substr_replace("world","Hello ",0,0);
echo "<br/>";
// insert new string to string
echo substr_replace("i am rayhan","Hi ",0,0);

