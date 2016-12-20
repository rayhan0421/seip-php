<h1> use instead of shell_exec().</h1>

<h1>PHP supports one execution operator: backticks (``).</h1>
<h1>Note #: The backtick operator is disabled when safe mode is enabled or shell_exec() is disabled.</h1>
<h1>what is this ? : backticks are known as "command substitution"</h1>
<?php


$host = 'www.wuxiancheng.cn';
echo `ping -n 3 {$host}`;


echo "<hr/>";

$output = `dir`;
echo "<pre>$output</pre>";

echo "<hr/>";

print `ls`;


echo "<hr/> ";

$test = `t.bat`;
echo "<pre>$test</pre>";

?>

<h1>run bat file with backtricks
</h1>
