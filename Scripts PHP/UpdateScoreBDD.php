<?php
	$connection = mysqli_connect('localhost','id6099863_feed','feedfeed','id6099863_feed_game');

	//check
	if(mysqli_connect_errno())
	{
		echo "Connection failed"; //error code
		exit();
	}

	$name = $_POST["name"];
	$score = $_POST["score"];
	
	$selectScoreQuery = "SELECT bestScorePlayer FROM Player WHERE namePlayer = '".$name."';";
	$request = mysqli_query($connection, $selectScoreQuery);
	
	while ($row = $request->fetch_assoc()) {
        if($score > $row['bestScorePlayer']) {
    	//update score player
    	    $updatePlayerQuery = "UPDATE Player SET bestScorePlayer = ".$score." WHERE namePlayer = '".$name."';";
    	    mysqli_query($connection, $updatePlayerQuery) or die ("Update score player query failed");
    	    echo("0");
        }
    }
?>