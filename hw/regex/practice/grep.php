<h1>preg_grep — Return array entries that match the pattern</h1>
<pre>
<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 17-01-2017
 * Time: 07:07 PM
 */

$foods = array("pasta", "steak", "fish", "potatoes");

// find elements beginning with "p", followed by one or more letters.
$p_foods = preg_grep("/p(\w+)/", $foods);


var_dump($p_foods);