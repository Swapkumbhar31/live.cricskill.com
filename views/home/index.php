
<div class="mycontainer">
    <ul class="nav nav-pills nav-justified">
        <li><a data-toggle="pill" href="#home">Old Matches</a></li>
        <li class="active"><a data-toggle="pill" href="#menu1">Live</a></li>
        <li><a data-toggle="pill" href="#menu2">Upcoming Matches</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade">
            <br><br>
            <table class="table table-hover">
                <?php
                foreach ($cricketMatches->matches as $item2) {
                    if ($item2->matchStarted) {
                        if ($item2->type === "T20I" || $item2->type === "ODI" || $item2->type === "Test" || $item2->type === "WomensODI") {
                            $present = false;
                            foreach ($cricketOldMatches->data as $item) {
                                if (strcmp($item2->unique_id, $item->unique_id) === 0) {
                                    $present = true;
                                }
                            }
                            if (!$present) {
                                echo '<tr class="clickable-row" data-href="'.url.'match/index/'.$item2->unique_id.'">';
                                echo '<td>' . $item2->type . '</td>';
                                echo "<td>";
                                echo "<img src='".url."public/images/flag/".$item2->$team_1.".png'>";
                                echo $item2->$team_1 . "<br>";
                                echo "<img src='".url."public/images/flag/".$item2->$team_2.".png'>";
                                echo $item2->$team_2 . "<br>";
                                echo "</td>";
                                $date = new DateTime($item2->dateTimeGMT);
                                $date->setTimezone(new DateTimeZone('Asia/Kolkata'));
                                echo "<td>".$date->format('d M Y h:i')."</td>";
                                echo '</tr>';
                            }
                        }
                    }
                }
                ?>
            </table>

        </div>
        <div id="menu1" class="tab-pane fade in active">
            <br><br>
            <table class="table table-hover">
                <?php
                foreach($cricketOldMatches->data as $item) {
                    foreach ($cricketMatches->matches as $item2){
                        if($item2->matchStarted)
                            if ($item2->type === "T20I" || $item2->type === "ODI" || $item2->type === "Test" || $item2->type === "WomensODI") {
                                    if (strcmp($item2->unique_id,$item->unique_id) === 0) {
                                        echo '<tr class="clickable-row" data-href="'.url.'match/index/'.$item->unique_id.'">';
                                        echo '<td>' . $item2->type . '</td>';
                                        echo "<td>";
                                        $score = explode(" v ",$item->description);
                                        echo "<img src='".url."public/images/flag/".$item2->$team_1.".png'>";
                                        echo $score[0] . "<br>";
                                        echo "<img src='".url."public/images/flag/".$item2->$team_2.".png'>";
                                        echo $score[1] . "<br>";
                                        echo "</td>";$date = new DateTime($item2->dateTimeGMT);
                                        $date->setTimezone(new DateTimeZone('Asia/Kolkata'));
                                        echo "<td>".$date->format('d M Y h:i')."</td>";
                                        echo '</tr>';
                                    }
                            }
                    }
                }
                ?>
            </table>
        </div>
        <div id="menu2" class="tab-pane fade">
            <br><br>
            <table class="table table-hover">
            <?php
            foreach($cricketMatches->matches as $item) {
                if(!$item->matchStarted)
                    if ($item->type === "T20I" || $item->type === "ODI" || $item->type === "Test" || $item->type === "WomensODI"){
                        echo '<tr class="clickable-row" data-href="'.url.'match/index/'.$item->unique_id.'">';
                        echo '<td>'.$item->type.'</td>';
                        echo "<td>";
                        echo "<img src='".url."public/images/flag/".$item->$team_1.".png'>";
                        echo $item->$team_1 . "<br>";
                        echo "<img src='".url."public/images/flag/".$item->$team_2.".png'>";
                        echo $item->$team_2 . "<br>";
                        echo "</td>";
                        $date = new DateTime($item->dateTimeGMT);
                        $date->setTimezone(new DateTimeZone('Asia/Kolkata'));
                        echo "<td>".$date->format('d M Y h:i')."</td>";
                        echo '</tr>';
                    } 
            }
            ?>
            </table>
        </div>
    </div>

</div>