<?php

// string manipulation function

echo '<center><h1>php chop()</h1></center>';
echo '<br/>';
echo '<h1>Remove characters from the <span style="color:orangered"> right end of a string </span> right end of a string:</h1>';
$str = "Hello World!\n\n";
echo $str;
echo chop($str);

/*
 *  chop(string,charlist)
 * The following characters are removed if the charlist parameter is empty:
"\0" - NULL
"\t" - tab
"\n" - new line
"\x0B" - vertical tab
"\r" - carriage return
" " - ordinary white space
 */

$st = "i love bangladeshs";
echo '<br/>';
echo chop($st,'s');

$st = "i love bangladeshsi";
echo '<br/>';
echo chop($st,'si');

$st = "i love bangladeshsi";
echo '<br/>';
echo chop($st,'bangladeshsi');
echo '<br/>';

echo chop("   Ramki   ");//right spaces are eliminated
echo '<br/>';
echo chop("Ramkrishnuvwxyz", "u..z");// remove u to z from right of string end
echo '<br/>';
echo chop("Ramkrishnuvwxyzabcdt", "a..t");// remove a to t from right of string end, which range match


echo '<br/>';

function String2Stars($string='',$first=0,$last=0,$rep='*'){
    $begin  = substr($string,0,$first);
    $middle = str_repeat($rep,strlen(substr($string,$first,$last)));
    $end    = substr($string,$last);
    $stars  = $begin.$middle.$end;
    return $stars;
}

$string = 'abcdefghijklmnopqrstuvwxyz';
echo String2Stars($string,5,-5,'*');   // abcde****************vwxyz
echo '<hr/>';

echo '<center><h1>php chr()</h1></center>';
echo '<h1>ASCII to<span style="color:orangered"> char  </span> convert:</h1>';
//he chr() function returns a character from the specified ASCII value.

//ord — Return ASCII value of character
//ord($str);
echo "<br/>";
echo chr(35);
echo "<br/>";
for($i=0;$i<10; $i++)
{

    echo "char is : ".chr($i+60)."<br/>";
}

echo "<a href='http://www.asciitable.com'> ASCII link is here</a>";
echo "<br/>";
$i=0;

echo "<table><tr><td>";

for($i==0;$i<=127;$i++){

    echo " chr($i) = ".chr($i)."<br>";

    if($i%20 == 0 and $i>19){echo "</td><td valign=top>";}

}

echo "</td></table>";

echo '<hr/>';
echo '<center><h1>php chunk_split()</h1></center>';
echo '<br/>';
//chunk_split(string,length,end)

//chunk_split ( string $body [, int $chunklen = 76 [, string $end = "\r\n" ]] )
$str = "Hello world! rayhan udin";
echo chunk_split($str,6,"...");
echo '<br/>';
echo chunk_split($str,2,"#");

// replace ... for every 6 char
//The chunk_split() function splits a string into a series of smaller parts.

echo '<hr/>';
$string_name1='w3resource.com';
echo chunk_split($string_name1,1,".");
echo '<br>'; echo chunk_split($string_name1,2,"/");
echo '<br>'; echo chunk_split($string_name1,1,"--");
echo '<hr/>';

echo '<hr/>';
echo "<h1> The implode() </h1>";


//The implode() function returns a string from the elements of an array.

//implode(separator,array)

// join() alies of implode

$arr = array('Hello','World!','Beautiful','Day!');
echo $st= implode(",",$arr)."<br>";// implode(" __ ",$arr)

echo "after implode return type is : ". gettype($st)."<br>";

echo '<hr/>';
echo "<h1> The explode() </h1>";

//Break a string into an array:
//explode(separator,string)

//explode(separator,string,limit)
$ex= explode(',',$st);

echo "<pre>";
print_r($ex);
echo "</pre>";
echo "<br/>";
$class_list='V;VI;VII;VIII;IX;X';
$classes=explode(";",$class_list);
print_r($classes);

echo '<hr/>';
echo "<h1> str_repeat() </h1>";

//str_repeat(string,repeat)

echo "The str_repeat() function repeats a string a specified number of times.

"."<br/>";

echo "5 times print : ".str_repeat("rayhan ", 5);
echo '<hr/>';

echo "<h1> similar text of two string </h1>";


//similar_text ( string $first , string $second [, float &$percent ] )
// match every char
$var_1 = 'PHP';
$var_2 = 'WITH MYSQL';


 echo "one char match : ".similar_text($var_1, $var_2, $percent);
echo "<br/>";
echo "match with : ".$percent."%";
echo "<br/>";
//we can get float number;
