<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 03-01-2017
 * Time: 03:14 PM
 */
// show error if file not exist return false if fails
$cont =  file_get_contents("sample8.txt");

var_dump($cont);
// first remove content then store string
// if file not exist create new file
file_put_contents("sample_put.txt","file put content 2");

