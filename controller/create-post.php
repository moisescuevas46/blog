<?php 
	$title = filter_input(INPUT_POST, "title", FILTER_SANItIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANItIZE_STRING);
	echo "<p> Title: $title</p>";
	echo "<p> Post: $post</p>";
?>
<!-- echos title and post and saves -->