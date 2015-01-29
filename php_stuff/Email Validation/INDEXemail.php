<?php
session_start();
?>

<!doctype html>
<html>
<head>
	<title>enter email</title>
	<meta charset = "UTF-8">
	<link rel="stylesheet" type="text/css" href="email.css">
</head>
<body>
	<div id='wrapper'>
		<h1>Please enter your email address:</h1>
		<form action="emailPROCESS.php" method='post'>
				<input id="box1" type ="text" name="email">
				<input class="blue" id="button1" type="submit" value="Submit">


</body>
</html>