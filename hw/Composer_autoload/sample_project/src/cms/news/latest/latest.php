<?php

namespace App\cms\news\latest;

use App\cms\news\archive\archive;

class latest extends archive{

    public function __construct()
    {

        echo "<hr/>";
        parent::__construct();



        echo " I am from latest <br/>";
    }
}
