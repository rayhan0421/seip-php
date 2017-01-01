<html>

<head>

    <title> include vs include_once vs require </title>
</head>

<body>
<?php

require_once "header.php";

require "header.php";




echo "<hr/>";
echo "Main body section";
echo "<hr/>";

 include "abc_class2.php";


new abc();
include_once "footer.php";
?>


</body>
</html>





