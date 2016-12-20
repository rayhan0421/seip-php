<h1>with practical example</h1>

<?php

class user {


   public function call($method,$arguments){

        if(is_callable(array($this,$method))){

          return call_user_func(array($this,$method),$arguments);
        }else{

            return "method". $method ."is not callable";
        }
    }

    public function hello($message = array()){

       echo $message[0]." : ".  $message[1];
    }

    public function calculator($elem = array()){

        switch ($elem[1]){
            case "+":
                echo $elem[0]+$elem[2];
                break;
            case "-":
                echo $elem[0]-$elem[2];
                break;
            case "/":
                echo $elem[0]/$elem[2];
                break;
            case "*":
                echo $elem[0]*$elem[2];
                break;
        }

    }
}

$obj = new user();
// sample call_user_func into class
$obj->call("hello",array("hello","world"));
echo "<br/>";
$obj->call("calculator",array("2","+","25"));


//dynamicall call method in class obj
echo "<br/>";
$obj->call("calculator",array("2","-","25"));
echo "<br/>";
$obj->call("calculator",array("2","*","25"));