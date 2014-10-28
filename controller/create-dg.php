<?php 
	require_once(__DIR__ . "/../model/database.php");//directs to another file
	$connection = new mysqli ($host, $username, $password);//gets some of the content from database
	if($connection->connect_error){
		die("Error: . $connection->connect_error");//if it doesnt connect print out die
	}
	else{
		echo "Success: " . $connection->host_info;
	}

	$connection->close();