<?php
namespace System\Core;

/**
 * Controler
 */
use System\Core\View;
class Controller
{
    public function view($path,$params=[]){
        return View::init($path,$params);
    }
}
