<pre>

<?php

function func($arg1, $arg2, $arg3) {
    return "$arg1, $arg2, $arg3";
}

func(1, 2, 3); //=> "1, 2, 3"

$args = range(1,9); // dynamic arguments
print_r($args);

echo "<hr/>";
echo call_user_func_array('func', $args); //=> "5, 6, 7

echo "<br/> range return <span style='color: orangered'>9 argument</span> func accept 3 argument so after using call_user_func_array() more argument is not matter <br/>";

echo "<hr/>";

$rand = rand(1,9); // dynamic arguments
print_r($rand);

echo "<br/> page refrash <br/>";

echo "<br/> so pass <span style='color: orangered'>minimmun arguments</span> ......more than minmum is not problem. <span style='color: orangered'>less than minimum argument</span> is cause error";
echo "<hr/>";
echo call_user_func_array('func', $rand);

echo "<hr/>";

echo "pass arguments as <span style='color: orangered'>array</span> <br/>";

$arr= array("1254","bangladesh",2017);

echo "<br/>";
echo "<br/>";
echo call_user_func_array('func', $arr); //

echo "<br/> pass arguments as array .<span style='color: orangered'>see last 2 arguments accept not prints</span> <br/>";

$arr= array("1254","bangladesh",2017,20.004,21.5);

echo "<br/>";
echo "<br/>";
echo call_user_func_array('func', $arr); //
?>

    </pre>
