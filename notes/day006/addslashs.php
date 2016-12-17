<?php

echo "addcslhas"."<br/>";

echo "<hr/>";

echo addcslashes('hello sc word script sc', 'script');
echo addcslashes('hello sc word script sc', 's');

echo "<hr/>";
$crc_string = crc32('Good Morning....!');
printf('%u', $crc_string);
