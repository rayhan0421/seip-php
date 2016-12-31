<?php


class dada {


public function __construct(){

echo "ami dada <br/>";

}

}

class baba extends dada{


public function __construct(){

    parent::__construct();

    dada::__construct();


    new dada();


    echo "ami pola <br/>";

}

}


$baba = new baba();


