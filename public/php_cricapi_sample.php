<?php

	$cricketMatchesTxt = file_get_contents('http://cricapi.com/api/cricket/?apikey=ykLfJPmrYEN2vqP0Ro6x9tBoaBy1');	// change with your API key
	$cricketMatches = json_decode($cricketMatchesTxt);

    foreach($cricketMatches->data as $item) {
?>
	<h4><?php echo($item->title); ?></h4>
<?php } ?>