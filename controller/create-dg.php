<?php 
	require_once(__DIR__ . "/../model/config.php");//directs to another file

	$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
			//string of characters
			. "title varchar (255) NOT NULL,"
			//the post is text
			. "post text NOT NULL,"
			//the wat tables are connected to eachother
			. "DateTime datetime NOT NULL,"
			. "PRIMARY KEY (id))"
		);

		
		// makes it so that it echos a connection error if it isnt connected

		$query = $_SESSION["connection"]->query("CREATE TABLE users ("
		 	. " id int(11) NOT NULL AUTO_INCREMENT,"
			. "username varchar(30) NOT NULL,"
			. "email varchar (50) NOT NULl,"
			. "passward char(128) NOT NULL,"
			. "salt char(128) NOT NULL,"
			. "PRIMARY KEY (id))");

// (#) lets the amount of letters be written in the text box

