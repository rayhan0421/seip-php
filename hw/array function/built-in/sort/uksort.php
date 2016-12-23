<h3>
    As you may have guessed, uksort will use your comparison function to see in which order the elements should be in the sorted array. It will call your function multiple times, every time with two keys. You compare those to keys to each other and give your result back.


</h3>
<li>works with key</li>
<li>0 1 -1  are return values</li>
<hr/>
<pre>
<?php

function my_sort($a,$b){
    if ($a==$b) {
        return 0;
    }
    return ($a>$b)?-1:1;
}

$arr=array("z"=>4,"y"=>2);
uksort($arr,"my_sort");


print_r($arr);