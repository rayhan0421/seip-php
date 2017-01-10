<?php
$d=1542;
$sd= "asdasdasd  saaskjasdjkdjdjdjhdhdh asdasdasdsadas sdfsdfjdsk : $d";

$fp   = fopen("data://text/plain;base64,Rayhan=$sd", 'r');
$meta = stream_get_meta_data($fp);

// prints "text/plain"
var_dump($meta);