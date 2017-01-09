<?php


abstract class Person{


    public abstract function getName();

    protected abstract function getNumberOfPerson();
}

class peoples extends person {


    public function getName(){
       echo "Name from peoples"."<br/>";
    }

    public function getNumberOfPerson(){

        echo "number of peoples are 25";
    }
}