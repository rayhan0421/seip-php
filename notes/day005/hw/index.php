<?php

function wtf($blahblah = true) {
    $var1 = "ONe";
    $var2 = "tWo";

    if($blahblah === true) {
      return $var2;
    }

    if($blahblah == "both") {
      return array($var1, $var2);
    }

    return $var1;
}

echo wtf("both")[0]
//would echo: ONe
echo wtf("both")[1]
//would echo: tWo

list($first, $second) = wtf("both")


echo "</hr>";

function getXYZ()
{
    return array(4,5,6);
}

list($x,$y,$z) = getXYZ();