<?php

echo "nowdoc way";
echo "<br/>";
$foo = 'bar';

$eod = <<<'EOD'
    I'm now, $foo!
EOD;

echo $eod;
echo "<br/>";

$now = <<<'NOD'
    I'm now, $foo!
NOD;

echo $now;

$tow = <<<'TOD'
    I'm now, $foo!
TOD;

echo $tow;
?>