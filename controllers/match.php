<?php
require_once 'libs/Controller.php';
class match extends Controller
{

    function __construct() {
        parent::__construct();
    }
    function index($unique_id){
        $this->View->match = $this->model->Match($unique_id);
        $this->View->summary = $this->model->Summary($unique_id);
        $this->View->matches = $this->model->Matches();
        $this->View->oldmatches = $this->model->OldMatches();
        $this->View->singleitem('match/index');
    }
}