
<pre>
<h1> a.	Make two array (Each array should be 5 elements) and marge them.  </h1>


<?php



$arr1 = array("c","c#","php","java","c++");

$arr2= array("sqlserver","mysql","oracle","mongodb","php");


$output = array_merge($arr1,$arr2);

print_r($output);
// if need we can use array_unique







