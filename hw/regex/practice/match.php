<h1>preg_match </h1>

<b>regular expression</b>
<pre>

<?php

echo "match with caret sing <br/>";

$string = "w25478";

$pattern = "/^\d/";

$output = preg_match($pattern,$string);

var_dump($output);

echo "match without caret sign <br/>";

$string = "w25478";

$pattern = "/\d/";

$output = preg_match($pattern,$string);

var_dump($output);

echo "url match with optional ? sign <br/>";

$string = "http://www.exampl3.COM";

$pattern2 = "/(http:\/\/)?(www).[a-z\d]+(.)[A-Z]+/";

$output = preg_match($pattern2,$string);

var_dump($output);

echo "<br/> url match without optional ? sign <br/>";

$string = "www.exampl3.COM";

$pattern2 = "/(http:\/\/)(www).[a-z\d]+(.)[A-Z]+/";

$output = preg_match($pattern2,$string);

var_dump($output);