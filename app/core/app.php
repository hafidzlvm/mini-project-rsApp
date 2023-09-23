<?php
namespace App\core;
class app
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
    public function __construct()
    {
        $url = $this->parseUrl();

        if(isset($url[0])){
            if(file_exists('../app/controllers/'.strtolower($url[0]).'.php' )){
                $this->controller = strtolower($url[0]);
                unset($url[0]);
            }
        }

        require_once '../app/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, strtolower($url[1]))) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        if (!empty($url)){
            $this->params = array_values($url);
        }
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            // rtim untuk menghapus carachter slash dari right
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // filter_var(var, filtername, options), untuk memfilter url. Apakah benar tulisan urlnya?
            $url = explode('/', $url);
            // explode make it to array
            return $url;
        }
    }
}
?>