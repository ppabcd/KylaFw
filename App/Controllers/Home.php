<?php
namespace App\Controllers;
/**
 * Home Class
 */
use System\Core\Controller;
use App\Models\HomeModel;
class Home extends Controller {
    public function index(){
        self::view('welcome',[
            'data' => 'Welcome to new website'
        ]);
    }
}
