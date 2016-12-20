<h1>Anonymous functions practice</h1>
<hr/>



<?php


// we can use $greet any where even in array
$greet = function($name)
{
    printf("Hello %s\r\n", $name);
};

$greet('World');
echo "<br/>";
$greet('PHP');

echo "<br/>";

echo "<hr/>";

$arr = array($greet("hello"),$greet(" bye bye "));

echo "<hr/>";
// does not work
// wrong way
// incorrect way
// cause already print into func
foreach ($arr as $func){
   echo "mew";
   echo $func;
}

$welcome = function($name){

  return "hay $name, welcome to php anonymous func";
};

//echo $welcome("rayhan");
echo "<hr/>";
// correct way function
//right way function
echo "function array is here : <br/>";
$well = array($welcome("rayhan"),$welcome("selim"),$welcome("aslam"),$welcome("abul"));
// function into array

// function render with foreach, for loop forloop
// function into foreach , forloop
foreach($well as $func){

    echo $func."<br/>";
}

echo "<hr/>";

$message = "inherited message";
// inherit
$example = function () use ($message) {
    echo $message;
};

// without argument pass / parameter define
$example();
$num = 2017;
echo "<hr/>";



$example3 = function () use ($message,$num) {

    return "code: $num : ".$message." : without echo into function . " ;
};

// without argument pass / parameter define
echo $example3();
echo "<hr/>";
$example2 = function () use ($message,$num) {
    $num = $num+20;
    return "code: $num : ".$message." : without echo into function . " ;
};

// without argument pass / parameter define
echo $example2();

echo "<hr/>";
echo "<h1>with argument </h1>";
// Closures can also accept regular arguments
$example = function ($arg) use ($message) {
    var_dump($arg . ' ' . $message);
};
$example("hello");

echo "<hr/>";

// recursive with  Closures function

$factorial = function( $n ) use ( &$factorial ) {
    if( $n == 1 ) return 1;
    return $factorial( $n - 1 ) * $n;
};

echo "<pre>";
print_r($factorial(3));

echo "<hr/>";
$maximum = 5; // This can be adjusted to as many levels as necessary.
$func = function($level = 0) use ($maximum, &$func) {
    echo str_repeat(' ', $level) . "I am on level {$level}\n";
    if ($level < $maximum) {
        // $level big then break function
        $func($level + 1);
    }
};
$func();
echo "<hr/>";
echo "<hr/>";
// lambda
echo "<hr/>";
$multiply = create_function('$a, $b','return $a * $b;');
echo $multiply(5, 5); // 25

echo "<hr/>";

function countEmails($multiply, $a, $b) {
    echo 'you have ' . $multiply($a, $b) . ' emails!';
}

$multiply = function ($a, $b) {
    return $a * $b;
};

echo countEmails($multiply, 2, 5); // you have 10 emails!