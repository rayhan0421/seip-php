<?php
include "MainOffice.php";

$office = new MainOffice();

$office->setName("ak");
$office->setTitle("bk");


echo $office->info();