<pre>
<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 03-01-2017
 * Time: 04:46 PM
 */

$csv = array_map('str_getcsv', file('store.csv'));

var_dump($csv);

foreach ($csv as $value){

    if(is_array($value)){

        foreach ($value as $v)
        {
            echo $v."<br/>";
        }


    }

}