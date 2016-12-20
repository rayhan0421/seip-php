<h1>add function to obj dynamically </h1>
<pre>
<?php

$obj = new StdClass();

$obj->func = function(){
    echo "hello";
};



var_dump($obj->func);

echo "<hr/>";
// must store $obj->func in variable
$func = $obj->func;
//echo $obj->func(); fatal error problem ,  we have to use call_user_func() function
// then call
$func();

echo "<h1>Problem solve error cause of \$obj->func() declare</h1>";
echo "<hr/>";
// to avoid fatal error use call_user_func / call_user_func_array()
call_user_func($obj->func);


echo "<hr/>";
// to avoid fatal error use call_user_func / call_user_func_array()

// pass atleast blank array in second parameter
call_user_func_array($obj->func,array());
//

echo "<hr/>";

function foo ($a, $b) {
    return $a + $b;
}
//call_user_func_array

// solve dificult function call
// unknown argument problem solve

// null argument does not work
$func = 'foo';
$values = array(1, 2);
 $ex= call_user_func_array($func, $values);

 echo "after call func result : ".$ex;