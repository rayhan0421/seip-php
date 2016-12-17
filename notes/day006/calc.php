<?php

if($_GET['type']=="add"){

    $result = $_GET['num1']+$_GET['num2'];

    echo "result is : ".$result;
}elseif ($_GET['type']=="minus"){
    $result = $_GET['num1']-$_GET['num2'];

    echo "result is : ".$result;

}elseif ($_GET['type']=="division"){
    $result = $_GET['num1']/$_GET['num2'];

    echo "result is : ".$result;
}elseif ($_GET['type']=="mult"){
    $result = $_GET['num1']*$_GET['num2'];

    echo "result is : ".$result;
}else{

echo "no result";
}


