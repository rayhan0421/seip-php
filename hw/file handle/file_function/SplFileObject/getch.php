<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 03-01-2017
 * Time: 08:40 PM
 */
// read file content char by char
$file = new SplFileObject('sample.txt');

while (false!==$char=($file->fgetc())) {
    echo "$char <br/>";
}
// other way

/*while ( ! $file->eof()) {
    echo $file->fgetc()."<br/>";
}*/

// other way
/*while ($file->valid()) {
    echo $file->fgetc()."<br/>";
}*/