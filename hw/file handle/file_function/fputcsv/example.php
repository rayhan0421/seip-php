<pre>
<?php

$file = fopen("sample.csv",'r');


$arr = array(array("bangladesh","dhaka","barisal"),
    array("100254","internet"),
    array("987456562","mobile"),
    array("rayhan"),
    array("name"=>"salim")
);


/*foreach ($arr as $list){

   fputcsv($file ,$list);
}*/


while(!feof($file)){
   // $d=fgetcsv($file,122,':');
    // : for separator and 122 for string lenght for every line to take
 $d=fgetcsv($file);
/*  if(is_array($d))
   foreach ($d as $v){
       echo $v." <br/>";
   }
*/

 print_r($d);

//   echo fgets($file);
}







//$csv = array_map('str_getcsv', file('sample.csv'));
//var_dump($d);

fclose($file);


