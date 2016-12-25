<pre>
    we may use iterator for advanced sub_sum
Iterator::current — Return the current element
Iterator::key — Return the key of the current element
Iterator::next — Move forward to next element
Iterator::rewind — Rewind the Iterator to the first element
Iterator::valid — Checks if current position is valid


<?php
// array sub sum / report sum
// for sub sum
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

// predefine array
$data_summ = array();
foreach ( $data as $value ) {
   // otherwise will be index problem /error
    // store key on array
  $data_summ[$value["type"]] = 0;
}
sort($data);
//var_dump($data);


foreach ( $data as  $list ) {


    echo "type--: ".$list["type"]. " is ". $list["cost"]."<br/>";
    $data_summ[ $list["type"] ] += (float)$list["cost"];
}

echo "<pre>";



natcasesort($data_summ);
print_r($data_summ);









function record_sort($records, $field, $reverse=false)
{
    $hash = array();

    foreach($records as $record)
    {
        $hash[$record[$field]] = $record;
    }

    ($reverse)? krsort($hash) : ksort($hash);

    $records = array();

    foreach($hash as $record)
    {
        $records []= $record;
    }

    return $records;
}

?>