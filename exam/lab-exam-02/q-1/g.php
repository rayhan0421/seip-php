
<pre>
<h1>g.	Make an array (should be 5 elements) and randomly show two element to the display. When page will be refreshing then output will be changed.    </h1>


<?php 
 


$arr1 = array("uiu","nub","uits","diu","ewu");

$out = array_rand($arr1,2);

print_r($out);


//echo $arr1[$out[0]]."<br/>";

//echo $arr1[$out[1]];

//forech

foreach ($out as $key){

    echo $arr1[$key]."<br/>";
}






