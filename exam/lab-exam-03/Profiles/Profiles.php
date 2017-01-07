<?php


Class Profiles{

private  $password= 'something123';


protected function getinfo(){

  return $this->password;

  }
public function getAll(){

   return $this->getinfo();
}
}

$pro = new profiles();

echo $pro->getAll();