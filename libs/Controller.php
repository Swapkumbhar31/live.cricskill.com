<?php
class Controller {
    function __construct() {
        //echo 'We Are in Main Controller<br>';
        $this->View = new View();
    }
    function loadmodel($name){
        $path = "models/".$name."_model.php";
        if(file_exists($path)){
            include $path;
            $modelname = $name."_model";
            $this->model = new $modelname();
        }
    }

}