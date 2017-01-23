<?php

include ("../../../../vendor/autoload.php");

use App\bitm\seip\students\students;

echo "<hr/>";



 $student = new students();

 $student->setData($_POST);
$student->store();


