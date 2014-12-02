<?php
	require_once(__DIR__ . "/database.php");
	session_start();
	$path = "/blog/"; //finds the blog

	$host = "localhost"; //host name

	$username = "root"; //username

	$password = "root"; //username

	$database = "blog_db"; //database name

	if(!isset($_session["connection"]))	{
		$connection = new Database($host, $username, $password, $database);
		$_SESSION["connection"] = $connection;
	}
?>