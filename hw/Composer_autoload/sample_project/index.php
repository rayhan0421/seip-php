<?php
require "vendor\autoload.php";
use App\cms\news\archive\archive;
use App\cms\news\latest\latest;
use App\system\config;
use App\system\trans;
use Admin\logger\logger;
use Admin\config\config as conf;
use Admin\safe\backend\filter;

$arc = new archive();



$l= new latest();


new config();

include_once("views/cms/news/archive/index.php");




$d= new logger();
$d->display();

new conf();
$d= new filter();

// trait psr-4
// trait autoload
// trait composer
$d->comment();
// multiple trait
$d->helo();
helo();

$json = serialize($d);
echo "<hr/>";

echo $json;
echo "<hr/>";
new trans();




