<?php 
	require_once(__DIR__ . "/../model/config.php");
	

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	
	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
		if($query){
			echo "<p>Successfully inserted post: $title</p>";
			echo "Today is " . date("l") . "<br>";
			echo "Today is " . date("Y-m-d") . "<br>";
			echo "The time is " . date("h:i:sa");
		}
		else{
			echo "<p>" . $_SESSION["connection"]->error . "</p>";
		}
		
	
?>
<!-- echos title and post and saves -->
<!-- makes a connection to config.php -->
<!-- lets us insert info to our database! -->
<!-- echos if it has connected or if it has not connected to the database to post -->
<!-- INSERT INTO inserts a defined variable into MYSQL DB -->
<!-- the defined variables are query and it connects to a query -->p
<!-- changed some comments and changed some code to make the posts work like database to config.php -->