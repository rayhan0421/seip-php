<?php

class Example {
    public function doSomething ($n,$d) {
        //inner
        $x = 4;
        $closure = static function ($y) use ($d,$x) {
            return $x + $y*$y+$d;
        };
        //$n pass to $y, $n==$y
        //$x pass from inner
        //$y pass from outter
        return $closure ($n);
    }
}

$ex = new Example();

echo   $ex->doSomething(2,1);

echo "<hr/>";
















