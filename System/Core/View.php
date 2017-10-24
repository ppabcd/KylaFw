<?php
namespace System\Core;

/**
 * View Class
 */
class View
{
    public static function init($files,$params){
        $path = require_once('Config/path.php');
        if(!file_exists(BASEPATH.'\\'.$path['view'].'\\'.$files.'.php')){
            die('View File Not Found');
        }
        extract($params);
        require_once(BASEPATH.'\\'.$path['view'].'\\'.$files.'.php');
    }
}
