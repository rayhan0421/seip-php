<?php


class SubOffice{

  protected $title='';
  protected  $name = '';

   protected function setTitle($title='bakkas'){
       $this->title= $title;

   }

    protected function setName($name='akkas'){
        $this->name= $name;

    }

    protected function getTitle(){
        return $this->title;
    }
    protected function getName(){
        return $this->name;
    }


}