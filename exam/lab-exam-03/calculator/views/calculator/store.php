<?php

include("../../lib/calculator.php");

if(isset($_POST['number1']) && isset($_POST['number2'])){

    $calc = new calculator();
    $calc->setData($_POST['number1'],$_POST['number2']);
   if($_POST['type']=='add'){



      echo $calc->getdata('add');
   }elseif ($_POST['type']=='sub'){


       echo $calc->getdata('sub');

   }elseif ($_POST['type']=='mul'){


       echo $calc->getdata('mul');

   }elseif ($_POST['type']=='div'){


       echo $calc->getdata('div');

   }else{

       echo "wrong oparetor for :". $calc->getdata();
   }


}else{

 echo "not define";
}

