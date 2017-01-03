<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 03-01-2017
 * Time: 08:40 PM
 */
// read file content char by char
$file = new SplFileObject('sample.txt');

/*while (false!==$line=($file->fgets())) {
    echo "$line <br/>";
}*/
// other way

/*while ( ! $file->eof()) {
    echo $file->fgets()."<br/>";
}*/

// other way
while ($file->valid()) {
    echo $file->fgetss()."<br/>";
}

//other way to get line
/*
while ($file->valid()) {
    echo $file->fgets()."<br/>";
}*/
// other way
/*while (!$file->eof()) {
    echo $file->current();
    $file->next();
}*/
