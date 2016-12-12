<?php

namespace myname;

echo __LINE__;
//it show line no of script

echo __NAMESPACE__;

//show namepsace name ;

echo __FILE__;

// it show file absolute link
//C:\xampp\htdocs\rayhan\seip-php\notes\day004\index.php

echo __DIR__;

// it show directory not present file name
//C:\xampp\htdocs\rayhan\seip-php\notes\day004

echo __FUNCTION__;

function myfunc(){
   echo "<br/>";
    echo __FUNCTION__;
    //show running function name
}

myfunc();