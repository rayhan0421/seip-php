<h1>method chain</h1>
<h1>method chanining problem solve with "return $this;" in method end line</h1>
<?php



class abc{

    public function func1(){

        echo "hello func1<br/>";
       return $this;
    }

    public function func2(){

        echo "hello func2<br/>";
        return $this;
    }

    public function func3(){

        echo "hwllo func 3<br/>";
        return $this;
    }

    public function func4(){

        echo "hwllo func1<br/>";
        return $this;
    }

}

$chain = new abc();

//
$chain->func1()->func2();
// single or more method call no problem
//but depends on method depandency
$chain->func1()->func2()->func3()->func4();

echo "<hr/> <hr/>";

echo "<h1>function into function can be call </h1>";


class abc2{

    public function func1(){

        echo "hello func1<br/>";
        return $this;
    }

    public function func2(){

        echo "hello func2<br/>";
        $this->func3();
        return $this;
    }

    public function func3(){

        echo "hwllo func 3<br/>";
        return $this;
    }

    public function func4(){

        echo "hwllo func1<br/>";
        return $this;
    }

}

$chain = new abc2();

//
$chain->func1()->func2();
// single or more method call no problem
//but depends on method depandency
echo "<br/> with more :<br/> ";
$chain->func1()->func2()->func3()->func4();

echo "<hr/> <hr/>";

echo "<h1>function / method with argument </h1>";


class abc3{

    public function func1($name){

        echo "hello $name , func1<br/>";
        return $this;
    }

    public function func2(){

        echo "hello func2<br/>";
        $this->func3();
        return $this;
    }

    public function func3(){

        echo "hwllo func 3<br/>";
        return $this;
    }

    public function func4(){

        echo "hwllo func1<br/>";
        return $this;
    }

}

$chain = new abc3();

//
$chain->func1("vai")->func2();
// single or more method call no problem
//but depends on method depandency
echo "<br/> with more :<br/> ";
$chain->func1("vai")->func2()->func3()->func4();



