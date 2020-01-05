<?php

class Core
{

    protected $currentController = 'Home';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getURL();


        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->currentController . '.php';
            $this->currentController = new $this->currentController();

            if (isset($url[1])) {
                if (method_exists($this->currentController, $url[1])) {
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }

            $this->params = $url ? array_values($url) : [];
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }


    public function getURL()
    {

        if (isset($_SERVER['REQUEST_URI'])) {

            $url = rtrim($_SERVER['REQUEST_URI'], '/');
            $url = ltrim($url, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            return $url;
        }
    }
}
