<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 03-01-2017
 * Time: 11:34 AM
 */

$file = new SplFileObject('sample.txt');

//echo $file->fread($file->getSize()); //get all

echo $file->fread(15); // raed 15 character