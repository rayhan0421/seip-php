<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 03-01-2017
 * Time: 08:54 AM
 */
// instead of fseek

$fp = fopen('store.csv', 'r');

$file = new SplFileObject('sample.txt');

$file->seek(3);   // from 3rd line
// Seek read line by line
echo $file->current();
echo "<hr/>";
$file->rewind(); //go to first line



// iteretive way
 $file->seek($file->getSize()); // get line number

echo $linesTotal = $file->key(); // total line


echo "<br/> getcs: <br/>";
$file = new SplFileObject('sample.txt');

$i=0;
while ( ! $file->eof()) {
    $i++;
    echo "line $i ".$file->getCurrentLine()."<br/>";

    //same as fgets()
    //echo "line $i ".$file->fgets()."<br/>";

}


//echo $file->fread($file->getSize());
