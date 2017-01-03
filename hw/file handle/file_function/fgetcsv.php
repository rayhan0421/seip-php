<?php


$file = fopen("store.csv","r");

while(!feof($file))
{

      $d= fgetcsv($file,3);

     if(is_array($d))
      foreach ($d as $v){

          echo $v ." <br/>";
      }


}

fclose($file);


echo "<pre>";

