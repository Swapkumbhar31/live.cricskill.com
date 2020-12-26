<?php

class Model {
    function __construct() {
        //$this->conn = new Database();
        //$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function OngoingMatchs(){
        $cricketMatchesTxt = file_get_contents('http://cricapi.com/api/cricket/?apikey='.apikey);
        return json_decode($cricketMatchesTxt);
    }

    function OldMatches(){
        $cricketMatchesTxt = file_get_contents('http://cricapi.com/api/cricket?apikey='.apikey);
        return json_decode($cricketMatchesTxt);
    }

    function Summary($unique_id){
        $cricketMatchesTxt = file_get_contents('http://cricapi.com/api/fantasySummary/?apikey='.apikey.'&unique_id='.$unique_id);
        return json_decode($cricketMatchesTxt);
    }

    function Match($unique_id){
        $cricketMatchesTxt = file_get_contents('http://cricapi.com/api/cricketScore/?apikey='.apikey.'&unique_id='.$unique_id);
        return json_decode($cricketMatchesTxt);
    }

    function Matches(){
        $cricketMatchesTxt = file_get_contents('http://cricapi.com/api/matches?apikey='.apikey);
        return json_decode($cricketMatchesTxt);
    }
}