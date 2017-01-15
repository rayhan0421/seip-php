
<h2>The return statement ends and function and not the entirely script, and returns something as your wish.</h2>
<?php

function demo($num ,$div){

    try{
        $num/$div;
        return true;
    }catch ( Exception $w){

        return false;
    }




}


echo demo(10,0);
echo "<hr/>";
echo demo(10,2);