<pre>
<?php
class foo {
    public $value = 42;

    public function &getValue() {
        return $this->value;
    }

    public function demo($arr='',&$output=''){

       $output = $output+100;

       return $arr;

    }

    public function arraydemo(&$arr='',&$output=''){
        $output = $output+18597;
        $arr[0]="rayhan by reference and change array first value";
        return $arr;
    }
}

$obj = new foo;
$myValue = &$obj->getValue(); // $myValue is a reference to $obj->value, which is 42.
$obj->value = 2; // public $value and $myvalue change after calling getvalue
echo $myValue;

echo "<hr/>";


print_r($obj->demo(array('2541','name','null'),$res));


echo "<br/> output: ".$res; // multiple result usage

echo "<hr/>";
$data = array("sample","test","number ",2541); // change array first index data
print_r($obj->arraydemo($data,$result));

echo "<br/> output: ".$result;

