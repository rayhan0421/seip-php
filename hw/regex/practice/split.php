<h1>split</h1>
<pre>
<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 17-01-2017
 * Time: 07:11 PM
 */
$ip = "123.456.789.000"; // some IP address
$iparr = preg_split("/\./", $ip);

var_dump($iparr);

echo "<br/>split with comma or space ";

$keywords = preg_split("/[\s,]/", "hypertext language,     programming");
print_r($keywords);

echo "<br/>split with comma or space ";

$keywords = preg_split("/[\s,]+/", "hypertext language,     programming");
print_r($keywords);