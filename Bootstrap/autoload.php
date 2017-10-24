<?php
session_start();
if(!file_exists('vendor/autoload.php')){
  die('You must run \'composer install\'');
}
require_once('vendor/autoload.php');
use Helper\Development;
Development::timer();
require_once('Bootstrap/app.php');
echo "\nPage Rendered ".Development::timer();
