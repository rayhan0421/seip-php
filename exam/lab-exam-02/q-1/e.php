
<pre>
<h1> e.	Make two array (Each array should be 5 elements) and reverse their key and values and store to another array variable.  </h1>


<?php 


$arr1 = array("id"=>12,"name"=>"rayhan","email"=>"rayhan0421@gmail.com","address"=>"n/a","nationality"=>"bangladeshi");

$arr2 =array(12=>"red",15=>"blue",25=>"green",5687=>"white",41=>"black");

krsort($arr2);

asort($arr1);

$output = array_merge($arr1,$arr2);


print_r($output);
//print_r($arr1);
