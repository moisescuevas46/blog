<?php 
	require_once(__DIR__ . "/database.php");
	$path = "/blog/"; //finds the blog

	$host = "localhost"; //host name
	$username = "root"; //username
	$password = "root"; //username
	$database = "blog_db"; //database name

	$connection = new Database($host, $username, $password, $database);
	
?>