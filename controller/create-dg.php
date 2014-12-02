<?php 
	require_once(__DIR__ . "/../model/config.php");//directs to another file

	$query = $connection->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		//string of characters
		. "title varchar (255) NOT NULL,"
		//the post is text
		. "post text NOT NULL,"
		//the wat tables are connected to eachother
		. "PRIMARY KEY (id))");

	if($query){
		echo "<p>Succesfully created table: post </p>";
	}
	else{
		echo "<p>$connection->error</p>";
	} 