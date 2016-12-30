<?php 
/*
Flag determining what arguments are sent to callback:

ARRAY_FILTER_USE_KEY - pass key as the only argument to callback instead of the value

ARRAY_FILTER_USE_BOTH - pass both value and key as arguments to callback instead of the value
*/

$arr = array(10,25,465,"25","bd",87,36,"c",null);

function getnumber($var){


return is_number($var);
}


$arr_output= array_filter($arr,getnumber);


print_r($arr_output);