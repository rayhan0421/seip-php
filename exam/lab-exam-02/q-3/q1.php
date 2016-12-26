<pre>

 <h1>3.	Make an array and put 10 names as element of array. 5 no element should be “google”.
     Make a foreach loop and take input this array and display the ouput.
     Note: No element will display </h1>


<?php



$arr= array("bing","yahoo","facebook",'msn',"google","w3school","amazan","digitalbnagladesh","basis","bitm");

$output = array();

$input = "google";
foreach ($arr as $value){

    if($value == $input)
    {
        $output[]= $value;

        break;
    }else{

     $output[]= $value;

    }

}

print_r($output);
