<?php
$cricketMatches =  $this->matches;
$cricketOldMatches =  $this->oldmatches;
$team_1 = "team-1";
$team_2 = "team-2";
?>
<html xmlns="http://www.w3.org/1999/html">
    <head>
        <title>Live Cricket score</title>
        <link href="<?php echo url; ?>public/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo url; ?>public/css/mystyle.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo url; ?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <div class="container">
        <br><br>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?=url?>">Cricskill</a>
                </div>
            </div>
            <div class="container-fluid second">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?=url?>" style="background-color: #333333">Match</a>
                </div>
                <ul class="nav navbar-nav">
                    <?php
                    foreach($cricketOldMatches->data as $item) {
                        foreach ($cricketMatches->matches as $item2){
                            if($item2->matchStarted)
                                if ($item2->type === "T20I" || $item2->type === "ODI" || $item2->type === "Test" || $item2->type === "WomensODI") {
                                    {
                                        if (strcmp($item2->unique_id,$item->unique_id) === 0) {
                                            echo "<li><a  href='" . url . "match/index/" . $item2->unique_id . "'>".$item2->$team_1." VS ".$item2->$team_2."</a></li>";
                                        }
                                    }
                                }
                        }
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </div>
        <div class="container">
