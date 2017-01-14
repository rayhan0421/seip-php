<pre>
<?php


//$str = "\$FFtp://www.fa";
//$pattern = "/\\$?(([A-Z]{2}[a-z]+)\:\/\/(www)\.(fa))$/"; //for  $ finish pattern
$str = "\$FFtp://www.fa";
$mob = "8547866";
$pattern = "/^(\(?\d{3}\)?)?\.?(\d{6})/";
echo $output = preg_match($pattern,$mob,$m);
echo "<hr/>";
var_dump($m);

//filter_var()
session_start();
$_SESSION['msg'] = "success";


var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));


$s= "<script></script>alert('sss');<script>";


echo filter_var($s,FILTER_SANITIZE_STRIPPED);


echo "<br/>";


print_r(preg_split("/and/","bangladesh and india"));








