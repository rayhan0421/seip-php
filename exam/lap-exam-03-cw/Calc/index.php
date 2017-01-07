<?php

include_once ("vendor/autoload.php");
use  App\lib\calculator\calculator;


 $calc= new calculator(12,15);

echo $calc->add();