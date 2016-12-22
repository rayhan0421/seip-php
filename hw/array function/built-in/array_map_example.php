
<h1>example see callback fuction  </h1>
<pre>
<?php
function call_back_func($v1, $v2) {
    if ($v1 === $v2) {
        return "equal";
    }
    return "different";
}

$array1 = array(1, 2, 3, 4);
$array2 = array(10, 2, 30, 4);
$b = array_map("call_back_func", $array1, $array2);

print_r($b);

?>