<?php
require "vendor\autoload.php";
use App\cms\news\archive\archive;
use App\cms\news\latest\latest;
use App\system\config;
use Admin\logger\logger;
use Admin\config\config as conf;
use Admin\safe\backend\filter;

new archive();
new latest();
new config();

include_once("views/cms/news/archive/index.php");




new logger();

new conf();
new filter();

helo();