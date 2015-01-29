<?php
session_start();
?>

<!doctype html>
<html>
<head>
	<title>Number Game</title>
	<meta charset = "UTF-8">
	<link rel="stylesheet" type="text/css" href="CSSforNumberGame.css">
	<style>
<?php if ($_POST['guess'] == $_SESSION['rand']) {
	?> input.orange {
		display: none;
	}
<?php } ?>

	</style>
</head>
<body>
	<div id='wrapper'>
		<h1>Welcome to the Great Number Game!<h1>
			<p>I am thinking of a number between 1 and 100</p>
			<p>Take a guess</p>
			<form action="#" method='post'>
				<input id="box1" type ="text" name="guess">
				<br>
<?php
					// var_dump($_POST);

					// var_dump($_SESSION['rand']);

					if(!isset($_SESSION['rand']))
					{
						$_SESSION['rand'] = rand(0, 10);
					}

					if($_POST['guess'] == $_SESSION['rand'])
						{
?>							<div id="Correct">
								<p><?=$_POST["guess"]?> was the number!</p>
								<input type="submit" value="Play Again">
							</div>
<?php	
						}
						elseif($_POST["guess"] < $_SESSION['rand'])

						{	?><div id="toolow">
								<p>Too low!</p>
							</div>
<?php
						}		
						elseif($_POST["guess"] > $_SESSION['rand'])

						{	?><div id="toohigh">
								<p>Too high!</p>
							</div>
<?php	
						}
?>
				<input class="orange" id="button1" type="submit" value="Submit">



</body>
</html>