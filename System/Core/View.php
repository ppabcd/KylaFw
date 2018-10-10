<?php

namespace System\Core;

/**
 * Class View
 * @package System\Core
 */
class View
{
    public static function init($file, $params)
    {
        $configPath = require_once(BASEPATH . '/Config/path.php');
        $path = BASEPATH . '/' . $configPath['view'] . '/' . $file . '.php';

        if (!file_exists($path)) {
            die('View File Not Found');
        }

        extract($params);

        require_once($path);
    }
}
