<?php
//__sleep()” and “__wakeup()” magic functions, to take advantage
//objects in sessions and storing them in database tables.

class A {
    public $one = 1;

    public function show_one() {
        echo $this->one;
    }
}




$a = new A();
$d[]= serialize($a);


$b = new A();

$d[]= serialize($b);

var_dump($d);

file_put_contents('store.php', $d);
// store $a and $b in file using fopen with line by line

foreach ($d as $k=>$v ){
  echo "<br/>" . $k ." : ";

    $un = unserialize($v);

    $un->show_one();

}
//$un->show_one();


//$un = unserialize($s);

//$un->show_one();