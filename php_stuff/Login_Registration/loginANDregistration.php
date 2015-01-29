<?php

session_start();

?></p>


<html>
<head>
	<title>Login and Registration</title>
	<style type="text/css">
		*{
			font-family: helvetica;
		}
		.error
		{
			color: red;
		}
	</style>
</head>
<body>
<?php
	if(isset($_SESSION['errors']))
	{
		foreach ($_SESSION['errors'] as $error)
		{
			echo "<p class='error'>{$error} </p>";
		}
	
		unset($_SESSION['errors']);

	}
	if(isset($_SESSION['success_message']))
	{
		echo "<p class='success'>{$_SESSION['success_message']} </p>";
		unset($_SESSION['success_message']);
	}
?>
	<h2>Registration</h2>
		<form action="loginANDregPROCESS.php" method = 'post'>
			First name:<input type='text' name='first_name'><br>
			Last name:<input type='text' name='last_name'><br>
			Email address:<input type='text' name='email'><br>
			Password: <input type='password' name='password'><br>
			Confirm Password: <input type='password' name='confirm_password'><br>
			<input type='hidden' name='action' value='register'>
			<input type='submit' value='Register'>
		</form>

			
	<h2>Login</h2>
		<form action='loginANDregPROCESS.php' method = 'post'>
			Email address:<input type='text' name='email'><br>
			Password: <input type='password' name='password'><br>
			<input type='hidden' name='action' value='login'>
			<input type='submit' value='Login'>
		</form>
</body>
</html>
