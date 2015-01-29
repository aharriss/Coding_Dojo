<?php
session_start();

$points = $_SESSION['points'];

// what do we do if 'points' isnt in session yet? 

?>

<html>
<head>
	<title>Ninja Game</title>
	<meta charset = "UTF-8">
	<link rel="stylesheet" type="text/css" href="NinjaCSS.css">
</head>
<body>
	<form action="NinjaProcess.php" method='post'>
		<h4 class="header">Your Gold</h4>
		<form action="NinjaProcess.php" method='post'>
			<input type="hidden" name = "gold" value=<?= $points['total'] ?>>
			<input class="header" id="input1" type ="text" name="yourgold">
		</form>
		<br>

	<div class="boxes" id="farm">
		<h3>Farm</h3>
		<p>(earn 5-10 golds)</p>
		<form action="NinjaProcess.php" method='post'>
			<input type="hidden" name = "building" value="farm">
			<input class="orange" id="button1" type="submit" value="Find Gold!">
		</form>
	</div>
	<div class="boxes" id="cave">
		<h3>Cave</h3>
		<p>(earn 5-10 golds)</p>
		<form action="NinjaProcess.php" method='post'>
			<input type="hidden" name = "building" value="cave">
			<input class="orange" id="button1" type="submit" value="Find Gold!">
		</form>	
	</div>
	<div class="boxes" id="house">
		<h3>House</h3>
		<p>(earn 2-5 golds)</p>
		<form action="NinjaProcess.php" method='post'>
			<input type="hidden" name = "building" value="house">
			<input class="orange" id="button1" type="submit" value="Find Gold!">
		</form>	
	</div>
	<div class="boxes" id="casino">
		<h3>Casino!</h3>
		<p>(earn/take 0-50 golds)</p>
		<form action="NinjaProcess.php" method='post'>
			<input type="hidden" name = "building" value="casino">
			<input class="orange" id="button1" type="submit" value="Find Gold!">
		</form>
	</div>

	<p>Activities</p>
	<form action="NinjaProcess.php" method='post'>
		<input type="hidden" name = "comment" value="farm">
		<input id='commentbox' type='textarea' name='comment'>
	</form>


</body>
</html>

