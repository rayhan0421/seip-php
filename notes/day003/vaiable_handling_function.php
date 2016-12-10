<?php 

class cat

{

}

echo "result is ". boolval(0) ." nothing to show " ."<br/>";
echo "result is ". boolval(1) ." something to show " ."<br/>";

echo "result is ". boolval(11) ." true "."<br/>";

echo "<h1 style='color:orange'>"."without 0 all argument is true for boolval() function"."</h1>";

$name = "Rayhan Uddin";
$number = 2017;
$varchar = "code2017";
$d = 100.0;
$s = true;
$tr= "true";

echo $s;
$class = new cat();
echo "variable type is :  ". gettype($name)."<br/>";
echo "variable type is  : ". gettype($number)."<br/>";
echo "variable type is : ". gettype($varchar)."<br/>";
echo "variable type is : ". gettype($class)."<br/>";
echo "variable type is : ". gettype($d)."<br/>";
echo "variable type is : ". gettype($s). " result is :". $s."<br/>";
echo "variable type is : ". gettype($tr). " result is :". $tr."<br/>";
echo "<h1 style='color:orange'>"."gettype()  checking varible type"."</h1>";



$string  = "amr sonar bangla ....";

$arr  = array("amr", "sonar", "bangla");


echo "function is not array : ". is_array($string)."<br/>";

echo "function is  array : ". is_array($arr)."<br/>";


echo "<h1 style='color:orange'>"."is_array() checking array type"."</h1>";

$int = 2017;

$float = 10.12;

echo is_int($float)."<br/>";

echo "is_int is : ". is_int($int)."<br/>";


echo "<h1 style='color:orange'>"."is_int() checking integer type variable"."</h1>";

$null = '';
$notnull = "not null";
echo "is_null() checking varible is $null null ". is_null($null)."<br/>";
echo "is_null() checking varible is $null  not ". is_null($notnull). "null"."<br/>";

echo "<h1 style='color:orange'>"."is_null() checking variable is null or not"."</h1>";

echo "is varible set in script or file: " . isset($var)."<br/>";

echo "<h1 style='color:orange'>"."isset — Determine if a variable is set and is not NULL"."</h1>";

print_r($class);
echo "<h1 style='color:orange'>"."print_r() "."</h1>";
echo "<pre style='color:orange'>"."Outputs a human-readable representation of any one value
Accepts not just strings but other types including arrays and objects, formatting them to be readable
Useful when debugging
May return its output as a return value (instead of echoing) if the second optional argument is given" ."</pre>";

echo "<h1 style='color:orange'>"."serialize used for convert data "."</h1>";
echo $arr= serialize($arr);
echo "<h1 style='color:orange'>"."unserialize used for convert data "."</h1>";


echo "unserialize($arr)"."<br/>";

echo "unset() : to remove varible or file ". "<br/>";

$s = true;

echo $s;


echo "<br/>";

echo "<br/>";

echo "<br/>";


$a= 10;

$b= '$a';
$c= $b;
echo $c;

echo "so single quate is always string means $ varaible will not render";

$d= "$a";

$e = $d;

echo "</br>".$e;
echo "so double quate is not always string means $ varaible will  render";