<?php

echo "<h1>Now, \$a is initialized only in first call of function and every time the test() function is called it will print the value of \$a and increment it.</h1>";
function test()
{
    static $a = 0;
    echo $a;
    $a++;
}


echo " 1st call :"; test();

echo "<hr/>";
echo " 2nd call :"; test();
echo "<hr/>";
echo " 3rd call :"; test();
echo "<hr/>";
echo " 4th call :"; test();
echo "<hr/>";

?>