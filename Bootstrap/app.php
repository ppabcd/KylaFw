<?php
define('SEGMENT',explode('/',substr($_SERVER['REQUEST_URI'],1)));
$class_data = (isset(SEGMENT[0]))?SEGMENT[0]:'home';
$method_data = (isset(SEGMENT[1]))?SEGMENT[1]:'index';
$class =  __NAMESPACE__.'App\Controllers\\'.ucfirst($class_data);
if(!class_exists($class)){
  die("Class ".ucfirst($class_data)." Not Found \n");
}
if(!method_exists($class,$method_data)){
  die('Method '.ucfirst($method_data)."Not Found \n");
}
$run = new $class;
$run->{$method_data}();
