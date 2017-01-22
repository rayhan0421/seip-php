

<?php
// we need arrayiteretor for IteratorAggregate
// getIterator() should impletement , cause IteratorAggregate is interface
// #### https://adayinthelifeof.nl/2011/12/04/spl-using-the-iteratoraggregate-interface/     ##
class myData implements IteratorAggregate {
    public $property1 = "Public property one";
    public $property2 = "Public property two";
    public $property3 = "Public property three";

    public function __construct() {
        //  $this->array[] = $value;
        $this->property4 = "last property";
    }

    public function getIterator() {
        // or  return new ArrayIterator($this->array);
        return new ArrayIterator($this);
    }
}

$obj = new myData;

foreach($obj as $key => $value) {
    var_dump($key, $value);
    echo "\n";
}