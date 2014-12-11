<?php  
	require_once(__DIR__ . "/../model/config.php");
	if (!authenticateUser()) {
		header("Location: " . $path . "index.php");
		die();
	}

?>
<nav>
	<ul>
		<li><a href="<?php echo $path . "post.php"; ?>">BLOG POST FORM</a></li>
	</ul>
</nav>


<!-- Echos the path variable -->