<?php
	$connection = mysqli_connect('localhost','id6099863_feed','feedfeed','id6099863_feed_game');

	//check
	if(mysqli_connect_errno())
	{
		echo "Connection failed"; //error code
		exit();
	}
    
    $displayHighScoreQuery = "SELECT namePlayer, bestScorePlayer FROM Player WHERE bestScorePlayer = (SELECT MAX(bestScorePlayer) FROM Player);";
    $request = mysqli_query($connection, $displayHighScoreQuery);
    
	while ($row = $request->fetch_assoc()) {
    	//display the player who has the highest score
    	    echo $row['namePlayer']. "-" . $row['bestScorePlayer'];
	}
?>