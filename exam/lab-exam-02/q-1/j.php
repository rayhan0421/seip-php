
<pre>
<h1>j.	Make an array (should be 5 elements) and search using a value if the value
    is exists to the array then key will be display  </h1>


<?php

$arr1 = array("key1"=>"c","key2"=>"c#","key3"=>"php","key4"=>"java","key5"=>"c++");


//$output  = array_key_exists("key2",$arr1);
$input = "java";


foreach ($arr1 as $key=> $value ){

  if($value==$input){

    echo $key;
  }




}




