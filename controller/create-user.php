<?php 
	require_once(__DIR__ . "/../model/config.php");

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL)