<pre>
<?php

// callable type hint may be "closure" type hint instead, depending on php version
function array_group_by(array $arr, callable $key_selector) {
    $result = array();
    foreach ($arr as $i) {
        $key = call_user_func($key_selector, $i);
        $result[$key][] = $i;
    }
    return $result;
}

$data = array(
    array(1, "Andy", "PHP",25),
    array(1, "Andy", "C#",25),
    array(2, "Josh", "C#",25),
    array(2, "Josh", "ASP",23),
    array(1, "Andy", "SQL",23),
    array(3, "Steve", "SQL",23),
    array(1, "Andy", "c++",25),
);
//change $i[3] for column name
$grouped = array_group_by($data, function($i){  return $i[3]; });

print_r($grouped);
echo "<hr/>";
$grouped = array_group_by($data, function($i){  return $i[0]; });
print_r($grouped);
echo "<hr/>";
$grouped = array_group_by($data, function($i){  return $i[1]; });
print_r($grouped);
echo "<hr/>";
?>