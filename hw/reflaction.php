<h1> Reflaction :reflection API that adds the ability to reverse-engineer classes, interfaces, functions, methods and extensions.</h1>

<h1>class example:</h1>
<pre>
<?php

class Example {
    public function doSomething ($n) {
        //inner
        $x = 4;
        $closure = static function ($y) use ($x) {
            return $x + $y*$y;
        };
        //$n pass to $y, $n==$y
        //$x pass from inner
        //$y pass from outter
        return $closure ($n);
    }
}

$ex = new Example();

echo   $ex->doSomething(2);

echo "<hr/>";


$m = new ReflectionClass($ex);
Reflection::export ($m);
