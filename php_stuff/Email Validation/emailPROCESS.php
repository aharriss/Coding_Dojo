<?php
//how we use errors in validation: session.
session_start();



//if statement to determine if email is valid & direct user to the appropriate page.

	if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
	{
		$_SESSION["email"] = $_POST["email"];
		header('Location: NOTvalidEMAILpage.php');
	}
else
	{
		$_SESSION["email"] = $_POST["email"];
		header('Location: emailSUCESSpage.php');
	}


?>