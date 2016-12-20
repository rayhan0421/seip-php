<?php
$performance = 20;
$function_calling = "getsomething";
function getResult($labExam1 = "", $labExam2 = "", $labExam3 = "")
{

    global $performance;
    $result = $labExam1 + $labExam2 + $labExam3 + $performance;
    return $result;
}

function getsomething($labExam1 = "", $labExam2 = "", $labExam3 = "")
{
    global $performance;
    $result = $labExam1 + $labExam2 + $labExam3 + $performance + 10;
    return $result;
}

//$myresult = $function_calling();
$myresult2 = $function_calling(10, 20);
echo $myresult2. "<br/>";


