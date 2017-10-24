<?php
namespace App\Controllers;
/**
 * Home Class
 */
use System\Core\Controller;
class Home extends Controller {
    public function index(){
        self::view('welcome',[
            'data'=> 'hello'
        ]);
    }
    public function data(){
        echo 'ini data';
    }
}
