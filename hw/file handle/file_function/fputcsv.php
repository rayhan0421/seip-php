<?php


$arr[] = " i love bangladesh";
$arr[] =  " i like bnagladesh";


$file = fopen("store.csv",'a+');

fputcsv($file,$arr);
fclose($file);
