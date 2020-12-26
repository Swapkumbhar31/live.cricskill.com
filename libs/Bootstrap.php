<?php

class Bootstrap {
    function __construct() {    
        $url = explode('/', rtrim(isset($_GET['$url'])?$_GET['$url']:NULL, '/'));
        if(empty($url[0])){
            $url[0] = 'home';
        }
        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)) {
            require_once $file;
        }else{
            require 'controllers/Error.php';
            $model = new Error();
            $model->error("File Not Found");
            return false;
        }
        $contrller = new $url[0];
        $contrller->loadmodel($url[0]);
        if (isset($url[2])) {
            $contrller->{$url[1]}($url[2]);
        } else {
            if (isset($url[1])) {
                if(method_exists($contrller, $url[1])){
                    $contrller->{$url[1]}();
                }else{
                    require 'controllers/Error.php';
                    $model = new Error();
                    $model->index();
                    return false;
                }
            }  else {
                $contrller->index();
            }
        }
    }

}
