<?php 
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">

	<div>
		<label for="email">Email:</label>
		<input type="text" name="email"/>
		<!-- lets the user type in their email -->
	</div>

	<div>
		<label for="username">Username:</label>
		<input type="to ext" name="username"/>
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

</form>
<!-- this makes a form that users can register up to. -->