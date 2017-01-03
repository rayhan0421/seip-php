
<?php

//$file = fopen("samples.txt",'w+');
$file = fopen("samples.txt",'a+'); //change mode w/w+/a+/a
$str = "hellow bangladesh";

fwrite($file,$str);


fclose($file);


