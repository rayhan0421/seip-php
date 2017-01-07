<?php
namespace App\lib\calculator;


Class calculator {

    public $number1= null;

    public $number2 = null;

    public function __construct($num1,$num2)
    {
        $this->number1 = $num1;
        $this->number2 = $num2;
    }

    public function add(){


        return $this->number1+$this->number2;
    }

    public function sub(){



        return $this->number1-$this->number2;
    }

    public function mul(){



        return $this->number1*$this->number2;
    }

    public function div(){


        return $this->number1/$this->number2;
    }

}