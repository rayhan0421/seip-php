<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 03-01-2017
 * Time: 08:18 PM
 */
// read line by line
$file = new SplFileObject(__FILE__);
$file->seek(3);
echo $file->current();

echo "<hr/>";
// read char position
$file->fseek(42);
echo $file->current();
/*
// get all line
while ( ! $file->eof()) {
    echo $file->fgets()."<br/>";
}*/
