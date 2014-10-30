<?php 
	require_once(__DIR__ . "/../model/database.php");//directs to another file

	$connection = new mysqli ($host, $username, $password);//gets some of the content from database

	if($connection->connect_error){
		die("Error: . $connection->connect_error");//if it doesnt connect print out die
	}
	
	$exists = $connection->select_db($database);//tries to acces a database

	if (!$exists) {
		$query = $connection->query("CREATE DATABASE $database");//gets a database

		if($query){
			echo "Successfuly created database: " . $database;//prints out the text
		}
	}
	else{
		echo "Database already exists";//echos if the database already exists or doesnt if it doesnt
	}

	$query = $connection->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		//string of characters
		. "title varchar (255) NOT NULL,"
		//the post is text
		. "post text NOT NULL,"
		//the wat tables are connected to eachother
		. "PRIMARY KEY (id))");


	$connection->close(); //closes the connection