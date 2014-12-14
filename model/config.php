<?php
	require_once(__DIR__ . "/Database.php");
	session_start();
	session_regenerate_id(true);
	$path = "/blog/"; //finds the blog

	$host = "localhost"; //host name

	$username = "root"; //username

	$password = "root"; //username

	$database = "blog_db"; //database name

	if(!isset($_SESSION["connection"]))	{
		$connection = new Database($host, $username, $password, $database);
		$_SESSION["connection"] = $connection;
	}
?>