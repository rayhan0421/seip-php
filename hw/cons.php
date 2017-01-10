<?php
/*
 * A constant is constant and can NOT change its value once assigned. A static variable, on the other hand, can have varying values
 */

Class constant {

   const abc = "ABC Alpa";
public static $xyz = "XYZ static alpa";

   public function abc(){

       echo "<br/> Abc method is here"." static var is here: " .self::$xyz;
   }

   public static function xyz(){

      return "<br/> static mnethod - xyz";
   }

   public function all(){

     echo "<br/>";

       echo "<br/> constant var is: self::abc . static var is :".self::$xyz." . static method is :".self::xyz() ." .";

       echo "<br/>";

       echo "<br/>";
   }
}


echo constant::abc;
echo constant::xyz();
//echo constant::xyz; error
$con = new constant();
$con->abc();
echo $con->xyz();

$con->all();

//$con->xyz; error Accessing static property constant::$xyz as non static


//echo $con->abc; error

//constant::abc = "Rayhan"; error




