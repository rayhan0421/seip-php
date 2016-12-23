<?php

//Pseudo code
//Use one of the two ways
if(condition){  //1. Condition fulfilled
    $newArray[ ] = $value;
    //↑ Put '$key' there, if you want to keep the original keys
    //Result array is: $newArray

} else {        //2. Condition NOT fulfilled
    unset($array[$key]);
    //Use array_values() after the loop if you want to reindex the array
    //Result array is: $array
}

// another simple way

return $value & 1;

//Even values
return !($value & 1);

//NOT null values
return !is_null($value);

//NOT 0 values
return $value !== 0;

//Contain certain value values
return strpos($value, $needle) !== FALSE;  //Use 'use($needle)' to get the var into scope

//Contain certain substring at position values
return substr($value, $position, $length) === $subString;

