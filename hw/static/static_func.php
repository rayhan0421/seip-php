<?php

/*
 * A constant is constant and can NOT change its value once assigned. A static variable, on the other hand, can have varying values
 */

function sum($d){
 static $i=1;
 static $s;
  static $sum;
  $i++;
  $sum=+$d;
 $s=$i;
 echo $sum. "  "." $s";
}



sum(12);
echo "<hr/> ";

sum(12);