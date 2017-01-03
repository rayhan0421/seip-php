<pre>
<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 03-01-2017
 * Time: 08:56 PM
 */

$file = new SplFileObject("sample.csv",'r');

/*$content = array(

    array("banglkadesh, india,pakistan"),
    array("ctg,dhaka"),
);


foreach ($content as $c){
    $file->fputcsv($c);

}*/

/*while(!$file->eof()){

  $d= $file->fgetcsv();

  if(is_array($d)){
      foreach ($d as $v){
          echo "$v<br/>";
      }
  }
}*/

// other way
/*
while($file->valid()){

    $d= $file->fgetcsv();

    if(is_array($d)){
        foreach ($d as $v){
            echo "$v<br/>";
        }
    }
}*/





