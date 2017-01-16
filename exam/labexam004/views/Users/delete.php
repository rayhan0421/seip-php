<?php

include "../../vendor/autoload.php";

use App\Users\Users;

$users= new Users();

$users->setData($_GET);

$users->delete();