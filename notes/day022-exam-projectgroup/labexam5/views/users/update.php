<?php
include ("../../vendor/autoload.php");
use App\users\Users;

$users = new Users();


 $users->setData($_POST);

$users->update();


