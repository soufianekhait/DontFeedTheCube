<?php
	$connection = mysqli_connect('localhost','id6099863_feed','feedfeed','id6099863_feed_game');

	//check
	if(mysqli_connect_errno())
	{
		echo "Connection failed"; //error code
		exit();
	}

	$name = $_POST["name"];

	//check if namePlayer exists
	$nameCheckQuery = "SELECT namePlayer FROM Player WHERE namePlayer = '".$name."';";
	$nameCheck = mysqli_query($connection, $nameCheckQuery) or die ("Name check query failed"); //error code

	if(mysqli_num_rows($nameCheck) > 0)
	{
		echo "Name already exists"; //error code
		exit();
	}

	//add user to the table
	$insertPlayerQuery = "INSERT INTO Player(namePlayer) VALUES('".$name."');";
	mysqli_query($connection, $insertPlayerQuery) or die ("Insert player query failed");

	echo("0");
?>