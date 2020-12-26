<?php
$cricketMatches =  $this->match;
$summary = $this->summary;
$team_1 = "team-1";
$team_2 = "team-2";
$fours = "4s";
$sixes = "6s";
$zeros = "0s";
$dismissal_info = "dismissal-info";
?>
<div class="mycontainer">
    <?php
    if($cricketMatches->matchStarted){

    }else{
        echo "<h4><span>".$cricketMatches->$team_1 ." VS ".$cricketMatches->$team_2."</span></h4>";
        if(isset($cricketMatches->score)){
            $score = explode(" v ",$cricketMatches->score);
            echo "<h5><span>".$score[0]."</span><br>";
            echo "<span>".$score[1]."</span></h5>";
        }else{

        }
        echo "<span style='color: gray'>".$cricketMatches->stat."</span><br>";
    }
    ?>
    <br>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#bat">Batting</a></li>
                <li><a data-toggle="pill" href="#ball">Bowling</a></li>
            </ul>
            <div class="tab-content">
                <div id="bat" class="tab-pane fade in active">
                    <?php
                    //print_r($summary);
                    //if($summary->type === "Test"){
                    $data = $summary->data;
                    foreach ($data->batting as $bat){
                        echo "<h4 style='background-color: #E3E6E3;padding: 5px;margin: 0px;'>".$bat->title."</h4>";
                        echo "<table class='table table-condensed'>";
                        echo "<tr>";
                        echo "<th>Batsman</th>";
                        echo "<th></th>";
                        echo "<th>R</th>";
                        echo "<th>B</th>";
                        echo "<th>4s</th>";
                        echo "<th>6s</th>";
                        echo "<th>SR</th>";
                        echo "</tr>";
                        foreach ($bat->scores as $player){
                            echo "<tr>";
                            echo "<td>".$player->batsman."</td>";
                            echo "<td>".$player->$dismissal_info."</td>";
                            echo "<td>".$player->R."</td>";
                            echo "<td>".$player->B."</td>";
                            echo "<td>".$player->$fours."</td>";
                            echo "<td>".$player->$sixes."</td>";
                            echo "<td>".$player->SR."</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    //}
                    ?>
                </div>
                <div id="ball" class="tab-pane fade">
                    <?php
                    //print_r($summary);
                    //if($summary->type === "Test"){
                    $data = $summary->data;
                    foreach ($data->bowling as $ball){
                        echo "<h4 style='background-color: #E3E6E3;padding: 5px;margin: 0px;'>".$ball->title."</h4>";
                        echo "<table class='table'>";
                        echo "<tr>";
                        echo "<th>Bowlers</th>";
                        echo "<th>O</th>";
                        echo "<th>M</th>";
                        echo "<th>R</th>";
                        echo "<th>W</th>";
                        echo "<th>Econ.</th>";
                        echo "</tr>";
                        foreach ($ball->scores as $player){
                            echo "<tr>";
                            echo "<td>".$player->bowler."</td>";
                            echo "<td>".$player->O."</td>";
                            echo "<td>".$player->M."</td>";
                            echo "<td>".$player->R."</td>";
                            echo "<td>".$player->W."</td>";
                            echo "<td>".$player->Econ."</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    //}
                    ?>
                </div>
            </div>
            <?php
            foreach ($summary->data->team as $squad){
                echo "<h4>".$squad->name." Squad</h4>";
                foreach ($squad->players as $player){
                    echo $player->name. ", ";
                }
                echo "<br>";
            }
            echo "<br>";
            echo "<br>";
            echo "<br>";
            ?>
        </div>
    </div>

</div>
