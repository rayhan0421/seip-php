<?php



class Calculator{

   public $num1=10;

   public $num2 = 20;


   public function getResult(){

   	return $this->num2 + $this->num1;
   }

  




}

   $calc = new Calculator();

   $res= $calc->getResult();
     
     echo $res;