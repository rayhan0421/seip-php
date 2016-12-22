<h1>not method chaninig </h1>

<h1>its called super sub object</h1>
<?php
/**
 * Created by PhpStorm.
 * User: rayha
 * Date: 22-12-2016
 * Time: 09:33 AM
 */



class ABC {


  public  $value = '$value is property of (abc) sub object from (super) xyz class';


}

class xyz {

   public $abc = "";

    public function __construct()
    {
        $this->abc = new ABC();
    }
}

//xyz super object
$xyz =  new XYZ();


// here abc is subobject
// and value is $value ...property of subobject
echo $xyz->abc->value;



?>

<hr/><hr/><hr/><hr/><hr/><hr/>
<h2>see var_dump result</h2>
<?php

var_dump($xyz);
?>
