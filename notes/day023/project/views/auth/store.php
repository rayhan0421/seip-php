<?php
include "../../vendor/autoload.php";
use App\auth\auth;


$users = new auth();

$users->setData($_POST);

$users->store();




?>