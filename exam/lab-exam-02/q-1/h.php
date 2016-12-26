
<pre>
<h1> h.	Make an array (should be 5 elements) and display the output of the array then adds a
    single element to the existing array and again shows the display of update array.  </h1>


<?php

$arr1 = array("c","c#","php","java","c++");
print_r($arr1);
echo "after add element <br/>";
$arr1[] = "perl";

print_r($arr1);