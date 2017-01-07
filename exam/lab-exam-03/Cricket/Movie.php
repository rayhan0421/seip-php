<?php
include "Cricket.php";
/**
 * Created by PhpStorm.
 * User: Web App Develop PHP
 * Date: 1/7/2017
 * Time: 11:21 AM
 */
class Movie extends Cricket
{
    public function __construct()
    {
        parent::__construct();

        echo "<br/> movie class";
    }


}

new movie();