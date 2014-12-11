<?php 
	require_once(__DIR__ . "/../model/config.php");
?>
<h1>Login</h1>
<form method ="post" action="<?php echo $path . "controller/login-user.php"; ?>">
	<div>
		<label for="username">Username:</label>
		<input type="text" name="username"/>
		<!-- lets users type in their username -->
	</div>

	<div>
		<label for="password">Password:</label>
		<input type="password" name="password"/>
		<!-- lets users register their password -->
	</div>

	<div>
		<button type="submit">Submit</button>
		<!-- creates a submit button -->
	</div>
</form