<pre>
<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 25-12-2016
 * Time: 12:43 PM
 */


$data = Array (

    Array ( "type" => 'lunch', "cost" => '50.50' ),
    Array ( "type" => 'mew', "cost" => '240.36' ),
    Array ( "type" => 'dinner', "cost" => '967' ),
    Array ( "type" => 'lunch', "cost" => '50.50' ),
    Array ( "type" => 'dinner', "cost" => '2019' ),
    Array ( "type" => 'lunch', "cost" => '100.50' ),
    Array ( "type" => 'mew', "cost" => '259' ),
    Array ( "type" => 'dinner', "cost" => '15' ),
    Array ( "type" => 'lunch', "cost" => '20' )
);


$data_summ = array();
foreach ( $data as $value ) {
    // otherwise will be index problem /error
    // store key on array
    $data_summ[$value["type"]] = 0;
}


sort($data);
$subtotal = 0;


$mul = array();
foreach ($data_summ as $key=> $val):
   // echo "cost type : ".$key ."<br/>";


    foreach ($data as $attribute):

           if($key==$attribute["type"]){
           $mul[$key][] = $attribute['cost'] ;
           $subtotal +=$attribute['cost'];


       }

    endforeach;
    //echo
     $mul[$key]["total"]["subtotal"]=$subtotal;
endforeach;


echo '<pre>' . print_r($mul,1) . '</pre>';