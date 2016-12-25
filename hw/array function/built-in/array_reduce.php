<pre>
<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 25-12-2016
 * Time: 09:21 PM
 */


function myfunction($v1,$v2)
{

    return $v1+$v2;
    // return $v1." : " .$v2;
}
$a=array(10,15,20);

// first add 5 then start 5+10+15+20
print_r(array_reduce($a,"myfunction",5));


echo "<hr/>";


?>


</pre>
