<?php

class Core
{

    public function start($getUrl)
    {

        if (!isset($getUrl['url'])) {
            require_once 'app/views/index.php';
        } else {
            $url = explode('/', $getUrl['url']);
            $controller = ucfirst($url[0]);
            if (file_exists('app/controllers/'.$controller.'.php')) {
                $controller = new $controller;
            } else {
                require_once 'app/views/404.php';
            }
        }

    }

}