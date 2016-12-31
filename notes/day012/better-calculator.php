<?php



class Calculator{

   public $num1=null;

   public $num2 = 20;


 
   public function setdata($a,$b){

   	$this->num1 =$a;
   	$this->num2 =$b;
   }

  
   public function getdata(){

   	 return $this->num1 +$this->num2;
   }




}

   $calc = new Calculator();
   $calc->setdata(10,254);
   $res= $calc->getdata();
     
     echo $res;