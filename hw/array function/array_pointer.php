<pre>
<?php
$transport = array('foot', 'bike', 'car', 'plane');
$mode = current($transport); // $mode = 'foot';
$mode = next($transport);    // $mode = 'bike';
$mode = next($transport);    // $mode = 'car';
$mode = prev($transport);    // $mode = 'bike';
$mode = end($transport);     // $mode = 'plane';

reset($transport);  // rearrange

$mode = current($transport); //go first after reset


// assign value to $tr
while($tr = current($transport)){


    var_dump($tr);
    next($transport);
}

// foreach with iteretor example

//foreach ($iterator as $current) {
  //  $iterator->next();
//}