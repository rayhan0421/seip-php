<h1>call_user_func_array — Alternate method for calling functions.</h1>
<hr/>
<h1>different way to Call a function dynamically in php</h1>
<h1>call_user_func_array() is primarily useful as a way to dynamically call functions and methods at runtime </h1>
<hr/>
<pre>
to make more dynamic function use these :

func_get_arg()

func_get_args()

func_num_args()

is_callable()
</pre>
<hr/>
<?php

class test{

    function echo_this($text){
        echo $text;
    }

    function get_method($method){
        $object = $this;
        return function() use($object, $method){
            $args = func_get_args();
            return call_user_func_array(array($object, $method), $args);
        };
    }
}

$test = new test();
$echo = $test->get_method('echo_this');
$echo('Hello');  //Output is "Hello"

echo "<hr/>";

echo "example 2 : <br/>";

$methodOne = function ()
{
    echo "I am  doing one.".PHP_EOL;
};

$methodTwo = function ()
{
    echo "I am doing two.".PHP_EOL;
};




class Composite
{
    function addMethod($name, $method)
    {
        $this->{$name} = $method;
    }

    public function __call($name, $arguments)
    {
        return call_user_func($this->{$name}, $arguments);
    }
}

// dynamically add method to class
$one = new Composite();
$one -> addMethod("method1", $methodOne);
echo "<br/>";
$one -> method1();
$one -> addMethod("method2", $methodTwo);
$one -> method2();


echo "<hr/>";

echo "example 3 : <br/>";
//__call() usage with call_user_func_array()



class Foo
{
    public function __call($method, $args)
    {
        if (isset($this->$method)) {
            $func = $this->$method;
            return call_user_func_array($func, $args);
        }
    }
}

//$args = $ar,$b   see carefully

$foo = new Foo();
$foo->bar = function () { echo "Hello, this function is added at runtime"; };
$foo->bar(); // without argument
echo "<br/>";
$foo->mar = function ($ar,$b) { echo "Hello, this function is added at runtime: arguments are :".$ar." ".$b; };
echo "<br/>";
$foo->mar("hellow"," 256 "); // with argument