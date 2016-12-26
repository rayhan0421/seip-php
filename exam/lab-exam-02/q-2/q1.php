<pre>

    2.	Make a user define function called “debug” and set one parameter to this function.
    When we’ll call this function by passing an argument (array)
    then this function will display output with list or best format.
</pre>

<?php

function debug($arg1 = array()){
    echo "<ul>";
 foreach ($arg1 as $value){

     echo "<li> $value</li>";

 }
 echo "</ul>";
}



$arr = array("i love bangladesh","i like bangladesh","i feel bangladesh","i fight for bangladesh");

    debug($arr);

