<?php


$arr[] = "love bangladesh";
$arr[] =  "like bnagladesh";


$file = fopen("store.csv",'w');




    fputcsv($file,$arr);


fclose($file);
