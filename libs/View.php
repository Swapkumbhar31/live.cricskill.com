<?php

class View {
    function __construct() {
        //echo 'View constructor<br>';
    }
    function singleitem($param) {
        require 'views/header.php';
        require 'views/'.$param.'.php';
        require 'views/footer.php';
    }
}