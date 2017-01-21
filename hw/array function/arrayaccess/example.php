<?php

//**********  simple way for object array


//The shortcut for creating a stdClass object in modern PHP is:

//$hygiene_obj = new StdClass;
// $hygiene_obj =(object)[];
$hygiene_obj =new class{};
$hygiene_obj->armpits = 'hairy';
$hygiene_obj->feet_status = 'smelly';
echo "<pre>", json_encode($hygiene_obj , JSON_PRETTY_PRINT), "</pre>";

// Adding more data is just a matter of creating a new class property. E.g.
$hygiene_obj->hands = 'grubby';

echo "<pre>", json_encode($hygiene_obj , JSON_PRETTY_PRINT), "</pre>";

// arrayaccess implementation

// arrayaccess can handle event when store in array or unset array
//
//
class Foo implements ArrayAccess {

    public $container = [
        'first'   => 1,
        'second'  => 2,
        'third'   => 3
    ];
    public $data=array();
    public function offsetExists ($offset) {
             // can be event handler here
        return isset($this->container[$offset]);

    }

    public function offsetGet ($offset) {
           // can be here event
        return isset($this->container[$offset]) ? $this->container[$offset] : null;

    }

    public function offsetSet ($offset, $value) {
          echo "set event handler: $value <br/>";
        array_push($this->data,$value);
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }

    }

    public function offsetUnset ($offset) {
          //can be here event when delete array data
        unset($this->container[$offset]);

    }

    public function store(){

 return $this->data;
    }

}




$object = new Foo;
$object['test key'] = 'value';
$object['chimi'] = 'changa';
$object['first'] = 'changed';
echo "<pre>";
 print_r($object->store());

var_dump($object);

echo "<hr/>";



