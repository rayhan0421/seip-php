<?php 


echo "function define";

echo "<br/>";

function getName()
{
	echo "Google";
}

getName();

function getResult($num="",$num2=null)
{
	$a=10;
	$b=20;
	
	//echo $a+$b;
	
	return $a+$b;
}
echo "<br/>";
//getResult();

echo getResult(10,21);

$myresult = getResult();
echo "<br/>";
echo $myresult +10;

//without argument function works if we don't pass argument 

//function argument maintain serial 

// we can return two result using array

fuunction add($num = "")
{
	
$internalnum = 10;	
return array($num,$internalnum );	
}




