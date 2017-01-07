<?php



Class Calculator{


    private $number1= '';

    private $number2 = '';


    public function setData($num1,$num2){

        $this->number1 =$num1;

        $this->number2 = $num2;
    }


    public function getData($type){

      if($type=='add'){

        return $this->add();
      }elseif ($type=='sub'){

          return $this->sub();
      }elseif ($type=='mul'){
          return $this->mul();
      }elseif ($type=='div'){
          return $this->div();
      }


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
