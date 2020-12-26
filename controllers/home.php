<?php
require_once 'libs/Controller.php';
class home extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index(){
        $this->View->matches = $this->model->Matches();
        $this->View->oldmatches = $this->model->OldMatches();
        $this->View->singleitem('home/index');
    }
}