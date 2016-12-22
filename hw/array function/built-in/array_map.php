<pre>

<?php

function cube($n) {
return($n * $n * $n);
}

$input = array(1, 2, 3, 4, 5);
$result = array_map("cube", $input);

print_r($result);


?>

    <hr/>
    <h1>array_map() - using more arrays</h1>

    <?php
// does not work with more argument $n , we have pass another array
   // function cube2($n,$n1) {
     //   return($n * $n1 );
    //}

    //$input = array(1, 2, 3, 4, 5);
    //$result = array_map("cube2", $input);

   // print_r($result);

    function cubeplus($n,$n1) {
      return($n + $n1 );
   }

   $input = array(1, 2, 3, 4, 5);
    $input2 = array(10, 20, 30, 40, 50);
    // no problem if two array size is not same
   $result = array_map("cubeplus", $input,$input2);
   print_r($result);
    ?>

    <hr/>
    <h1>array_map() - using more arrays</h1>

<?php
function show_Spanish($n, $m)
{
    return("The number $n is called $m in Spanish");
}

function map_Spanish($n, $m)
{
    return(array($n => $m));
}

$a = array(1, 2, 3, 4, 5);
$b = array("uno", "dos", "tres", "cuatro", "cinco");

$c = array_map("show_Spanish", $a, $b);
print_r($c);

$d = array_map("map_Spanish", $a , $b);
print_r($d);
?>
    <h1>array map with good example</h1>
