<?php
require_once 'libs/Controller.php';
class Error extends Controller{

    function __construct() {
        parent::__construct();
    }
    function index(){
        $this->View->singleitem('error/index');
    }
    function error($msg){
        $this->View->data = $msg;
        $this->View->singleitem('error/index');
    }
}