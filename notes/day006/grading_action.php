<?php

if(strlen($_GET['math'])>0 && strlen($_GET['eng'])>0 && strlen($_GET['ch'])>0&& strlen($_GET['phy']) >0) {
    if (isset($_GET['math']) && isset($_GET['eng']) && isset($_GET['ch']) && isset($_GET['phy'])) {

        if (is_null($_GET['math']) || is_null($_GET['eng']) || is_null($_GET['ch']) || is_null($_GET['phy'])) {
            echo "invalid input";

        } else {

            echo cgpa($_GET['math'], $_GET['eng'], $_GET['ch'], $_GET['phy']);
        }


    } else {

        echo "all invalid";
    }
}else{
    echo "emty";
}

function cgpa($sub1=0,$sub2=0,$sub3=0, $sub4=0){
 $total = $sub1+$sub2+$sub3+$sub4;
 return   $total/12;
}
