<?php


Class Car {


    public function wheel(){

       return $this->light() ." ". $this->geer()." ". $this->headphone();

    }

    protected function light(){

     return "i am light <br/>";
    }

    protected function geer(){

       return "i am geer <br/>";
    }

    private function headphone(){

     return "i am car headphone <br/>";
    }
}



$obj = new car();

echo $obj->wheel();

// can access private and proteced from own public method

//echo $obj->headphone();  error /wrong cannot access
//echo $obj->geer();   error  wrong cannot access

//so now sub class

Class bmw extends car{

    public function wheel(){

        $ob = new car();

        return $ob->geer();

    }

    public function door(){

       return $this->light();
    }

    public function show_headphone(){
     //$obj2 = new car(); error
     //return $obj2->headphone();
     return $this->headphone();
    }

    private function pri_geer(){

        return $this->headphone();
    }

    public function headphone_geer(){
        return $this->pri_geer();// error
    }


}
echo "<hr/>";
$other =  new bmw();

echo $other->wheel();

echo $other->door();

echo $other->headphone_geer();
//echo $other->show_headphone(); error

// we can call from sub class
//we cannot call private method in subclass





