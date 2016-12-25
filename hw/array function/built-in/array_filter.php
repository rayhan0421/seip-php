<pre>

    <h1>array_filter — Filters elements of an array using a callback function</h1>
    <li>ARRAY_FILTER_USE_KEY - pass key as the only argument to callback instead of the value</li>
<li>ARRAY_FILTER_USE_BOTH - pass both value and key as arguments to callback instead of the value</li>
<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 25-12-2016
 * Time: 10:01 PM
 */

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

var_dump(array_filter($arr, function($k) {
    return $k == 'b';
}, ARRAY_FILTER_USE_KEY));



var_dump(array_filter($arr, function($v, $k) {
    return $k == 'b' || $v == 4;
}, ARRAY_FILTER_USE_BOTH));