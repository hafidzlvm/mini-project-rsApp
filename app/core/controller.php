<?php
namespace App\core;
class controller
{
    public function view($path, $data = [], $data2 = [])
    {
        require_once 'app/views/' . $path . '.php';
    }
    public function loadModel($model)
    {
        if (file_exists('app/models/' . $model . '.php')) {
            require_once 'app/models/' . $model . '.php';
            return $mod = new $model(); // -> return Class with variable $mod
        }
        return false;
    }
}
?>