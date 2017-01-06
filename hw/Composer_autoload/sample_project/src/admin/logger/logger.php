<?php
namespace Admin\logger;

class logger{

    public $name='Rayhan';
    public function __construct()
    {
        echo "<br/> i am logger file";


    }

    public function display(){

        echo "display here <br/> ".$this->name;
    }
}


