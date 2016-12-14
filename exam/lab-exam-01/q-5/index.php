<?php

function abc(){
echo "function name is : ";
  echo __METHOD__;
}

class xyz

{

    function __construct()
    {
        echo __CLASS__;
    }
}

echo "<h1>Q- 5 </h1>";

echo "<br/>";

echo " magic constant is function that  ";

echo "<br/>";
echo " line no is : ". __LINE__;
echo "<br/>";

echo "file link : ".__FILE__;
echo "<br/>";

echo "dir link : " . __DIR__;
echo "<br/>";

echo abc();

echo "<br/>";
echo "class name is : ";

 new xyz();
echo "<br/>";


echo "<br/>";


echo "<br/>";
