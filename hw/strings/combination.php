<?php
// sampling
//sample
//combine char

//change 2nd argument result will change  sampling($chars, 4); sampling($chars, 2); sampling($chars, 3);
 echo "combination <br/>";

 function sampling($chars, $size, $combinations = array()) {

     # if it's the first iteration, the first set
     # of combinations is the same as the set of characters
     if (empty($combinations)) {
         $combinations = $chars;
     }

     # we're done if we're at size 1
     if ($size == 1) {
         return $combinations;
     }

     # initialise array to put new values in
     $new_combinations = array();

     # loop through existing combinations and character set to create strings
     foreach ($combinations as $combination) {
         foreach ($chars as $char) {
             $new_combinations[] = $combination . $char;
         }
     }

     # call same function again for the next iteration
     return sampling($chars, $size - 1, $new_combinations);

 }

 // example
 $chars = array('a', 'b', 'c');
 $output = sampling($chars, 4);
 var_dump($output);

 echo "<hr/>";
 echo "<pre>";
  $output = sampling($chars, 3);
   var_dump($output);
  echo "</pre>";
