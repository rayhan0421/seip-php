<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop PHP
 * Date: 1/25/2017
 * Time: 9:55 AM
 */
include ("../../vendor/autoload.php");
use App\users\Users;

$users = new Users();


$users->setData($_GET);
$users->delete();