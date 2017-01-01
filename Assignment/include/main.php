<html>

<head>

    <title> include vs include_once vs require </title>
</head>

<body>
<?php
include "abc_class.php";
//include_once "abc_class2.php";
include "function.php";
//include "function.php";
include "header.php";
//require "header.php";



echo "<hr/>";
echo "Main body section";
echo "<hr/>";
show();
echo "<hr/>";
new abc();
echo "<hr/>";
include_once "footer.php";
include_once "footer.php";
?>


</body>
</html>





