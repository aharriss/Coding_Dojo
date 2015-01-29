<?php
session_start();
?>

<!doctype html>
<html>
<head>
	<title>THANK YOU!</title>
	<meta charset = "UTF-8">
	<link rel="stylesheet" type="text/css" href="validEMAIL.css">
</head>
<body>
	<div id='wrapper'>
		<div id='valid'>
			<p>The email address you entered <?= $_SESSION['email'] ?> is a VALID email address! Thank you!</p>
		</div>
</body>
</html>