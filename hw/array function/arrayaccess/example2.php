<?php
class Foo implements ArrayAccess
{

     // we will have to implement these method if we use arrayaccess interface for special facility
    public function offsetExists ($offset)
    {
        echo __METHOD__, "\n";
    }

    public function offsetGet ($offset)
    {
        echo __METHOD__, "\n";
    }

    public function offsetSet ($offset, $value)
    {
        echo __METHOD__, "\n";
    }

    public function offsetUnset ($offset)
    {
        echo __METHOD__, "\n";
    }

}

$object = new Foo;
$object['foo'] = 'bar dfsada a' ;


// see example.php
echo $object['foo'];

//That’s how the PHP ArrayAccess interface works. It has some behind the scenes magic that will
// call a method on your class when you perform an array operation on your object,
// but it’s still up to you to implement that access