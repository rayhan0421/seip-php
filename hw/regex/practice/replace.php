<h1>Regular Expression </h1>
<b>replace  group with </b>
<p> here quatetion is delimeter</p>
<pre>
<?php


echo "<hr/>";
$text = "text1text2text3";

$text = preg_replace("'(text1)text2(text3)'is", "$1 and $2", $text);

var_dump($text);

echo "<hr/>";


$text = "ray0421RAY";

$text_replaced = preg_replace("'([a-z]+)([\d+]+)([A-Z])'", "$1 and $2 and $3", $text);

var_dump($text_replaced);

echo "<br/> and again example:";

$text_replaced = preg_replace("'([a-z]+)([\d+]+)([A-Z]+)'", "$3$2$1", $text);
echo "<br/>";
var_dump($text_replaced);
echo "<hr/>";

echo "<br/> number example :";

$text = "880-1825684781";

$text_replaced = preg_replace("'([\d]{3})-([\d+]+)'", "code: $1 and number: $2", $text);
echo "<br/>";
var_dump($text_replaced);

echo "<br/>email example:";

$text = "rayhan0421@gmail.com";

$text_replaced = preg_replace("'([\w]+)@([a-z]+).([a-z]{3})'", "username: $1 and domain: $2 and type $3", $text);
echo "<br/>";

var_dump($text_replaced);