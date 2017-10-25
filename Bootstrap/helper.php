<?php
use Helper\Str;
use Helper\CraynerMachine;
function random($l=6,$t='alnum'){
    return Str::random($l,$t);
}
function strip_quotes($str){
    return Str::strip_quotes($str);
}
function dd($dump){
    echo '<pre>';
    print_r($dump);
    echo '</pre>';
    die();
}
function strip_slashes($str){
    return Str::strip_slashes($str);
}
function cm($url,$cookie=null,$post=null,$op=null,$return=null){
    return CraynerMachine::qurl($url,$cookie,$post,$op,$return);
}
