<?php


echo "recursion function <br/>";


//  echo rec(2) ;



/**
 * @param $n
 * @return int
 */
function rec($n){

    if($n>10){
      return 0;
    }


  return 2+rec($n+3);


}

function sum($x, $y,$z) {
    if ($y > 0) {

        echo $x. "\t";
        return 0 + sum($x * 10, $y - 1,$z+1);

    } else {


        //extra 10 add with total sum
        return $x;
    }
}
// depends on return parameter


echo " final output with extra 10 : ". sum(1,3,54);
/*1+1
 *
1+1+1
...........
1+1+1
1+2+1+1p
.......

1+ (1+1)

1+(2+1)

1+(3+1)

so

*/



