<?php
//see comment

$file = new SplFileObject("fwrite.txt", "a"); //change mode w/r/w+/a+/a/r+

//$written = $file->fwrite("12345  45871!#@'dfdfd'",13); with lenght limitation we write 13 character

//use \r for new line

//fwrite to store string in file
$written = $file->fwrite("bangla bazar\r"); //will write all chararcter
echo "Wrote $written bytes to file";