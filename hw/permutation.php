<?php


function permute($str,$i,$n) {
   if ($i == $n)
       print "$str\n";
   else {
        for ($j = $i; $j < $n; $j++) {
          swap($str,$i,$j);
          permute($str, $i+1, $n);
          swap($str,$i,$j); // backtrack.
       }
   }
}

// function to swap the char at pos $i and $j of $str.
function swap(&$str,$i,$j) {
    $temp = $str[$i];
    $str[$i] = $str[$j];
    $str[$j] = $temp;
}

$str = "hey";
permute($str,0,strlen($str)); // call the function.

echo "<br/>";

$str = "20";
permute($str,0,strlen($str)); // call the function.

echo "<hr/>";

echo "number <br/>";

function pc_permute($items, $perms = array( )) {
    if (empty($items)) {
        $return = array($perms);
    }  else {
        $return = array();
        for ($i = count($items) - 1; $i >= 0; --$i) {
            $newitems = $items;
            $newperms = $perms;
            list($foo) = array_splice($newitems, $i, 1);
            array_unshift($newperms, $foo);
            $return = array_merge($return, pc_permute($newitems, $newperms));
        }
    }
    return $return;
}

$value = array('1', '2', '3');
print_r(pc_permute($value));
echo "<hr/>";

