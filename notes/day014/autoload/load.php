<?php

function __autoload($a){
	$file =  $a.".php";
 include_once($file);	
}

new car();