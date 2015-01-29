<?php
session_start();

?>

<!doctype html>
<html>
<head>
	<title>NOT VALID EMAIL ADDRESS</title>
	<meta charset = "UTF-8">
	<link rel="stylesheet" type="text/css" href="NOTvalidEMAIL.css">
</head>
<body>
	<div id='wrapper'>
		<div id='notvalid'>
			<p>The email address you entered <?= $_SESSION['email'] ?> is NOT a valid email address!</p>
		</div>
		<h1>Please enter your email address:</h1>
		<form action="#" method='post'>
				<input id="box1" type ="text" name="email">
				<input class="blue" id="button1" type="submit" value="Submit">


</body>
</html>