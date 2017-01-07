<?php

include ("SubOffice.php");
/**
 * Created by PhpStorm.
 * User: Web App Develop PHP
 * Date: 1/7/2017
 * Time: 11:03 AM
 */
class MainOffice extends SubOffice {

    public function info(){


      return $this->getName()." and ". $this->getTitle();

    }

    public function setName($name=''){

        $this->name= $name;
    }

    public function setTitle($title=''){

        $this->title= $title;
    }

}

