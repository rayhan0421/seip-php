<?php

/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 02-01-2017
 * Time: 08:51 PM
 */
class ser_object
{
    public $data = "";

    public function show_one() {
        echo $this->data;
    }

    public function store($arg1){

        $this->data = $arg1;
    }
}