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

