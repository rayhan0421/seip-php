<?php



$file = "file.exe";

echo is_file($file);

$file = fopen("contacts.csv","r");
print_r(fgetcsv($file));
fclose($file);