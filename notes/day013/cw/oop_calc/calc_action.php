<?php
    include_once ("calc_class.php");

    if(isset($_GET['number1']) && $_GET['number2']){

     $number1 = $_GET['number1'];

     $number2 = $_GET['number2'];

     $calc = new MyCalc($number1,$number2);

     if($_GET['type']=='Add'){

       echo $calc->add();

     }elseif($_GET['type']=='Sub'){

         echo $calc->sub();

     }elseif ($_GET['type']=='Mul'){

         echo $calc->mul();

     }elseif ($_GET['type']=='Div'){

         echo $calc->div();

     }else{

         echo "addition is : ". $calc->add();
         echo "<br/>";

         echo "Sub is : ". $calc->sub();
         echo "<br/>";

         echo "multiplication is : ". $calc->mul();
         echo "<br/>";

         echo "division is : ". $calc->div();
         echo "<br/>";

     }


    }




