<?php 
	require_once(__DIR__ . "/../model/database.php");//directs to another file

	$connection = new mysqli ($host, $username, $password);//gets some of the content from database

	if($connection->connect_error){
		die("Error: . $connection->connect_error");//if it doesnt connect print out die
	}
	
	$exists = $connection->select_db($database);//tries to acces a database

	if (!$exists) {
		$query = $connection->query("CREATE DATABASE $database");//gets a databasewdr

		if($query){
			echo "Successfuly created database: " . $database;//prints out the text
		}
	}
	else{
		echo "Database already exists";
	}


	$connection->close();