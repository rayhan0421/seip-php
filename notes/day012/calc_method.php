<?php



class Calculator{

   public $num1=null;

   public $num2 = 20;


 
   public function setdata($a,$b){

   	$this->num1 =$a;
   	$this->num2 =$b; 
   }

  
   public function getdata(){

   return $this->sum();

   }

   public function sum(){


   	return $this->num1 + $this->num2;
   }




}



$res = array();

  
 $c = new Calculator();
 $c->setdata(10,25);
 $res[] = $c;

 $c2 =  new Calculator();

 $c2->setdata(85,98);

 $res[] = $c2;
 $c3  = new Calculator();

 $c3->setdata(1000,8526);

 $res[] = $c3;

echo "<pre>";
 var_dump($res);

var_dump($c);

 foreach ($res as  $value) {
 	

 	echo $value->num1 ." ". " <br/>" ; 
 }




$d= get_class_methods('Calculator');

var_dump($d);

