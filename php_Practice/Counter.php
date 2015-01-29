<?php 
session_start();
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Counter</title>
	<meta name="description" content="PPC Lubricant">
	<link rel="stylesheet" type="text/css" href="Counter.css">
	<style type= "text/css">
	
	*{
		margin:10px auto;
	}

	p{
		text-align: center;
		font-family: helvetica;
		margin-top: 5px;
		font-size: 18pt;
		color: white;
		padding-top: 20px;
	}
	form{
		text-align: center;
	}

	#wrapper{
		width: 350px;
		height: 350px;
		margin: 50px auto;
		background-color: #D0402F;
	}

	#display{
		width:50px;
		height:50px;
		background-color: white;
		margin: 10px auto;
		border: 1px solid black;
		text-align: center;
		vertical-align: middle;
		font-size: 32pt;
		color: blue;
		font-family: helvetica;
	}


	</style> 


</head>

<body>

	<div id="wrapper">

		<p>You visited the site</p>
		<div id="display">

			<?php 
					if (!isset($_SESSION['count'])) {
					  echo $_SESSION['count'] = 0;
					} else {
					  echo $_SESSION['count']++;
					}
			?>	
		</div>
		<p>times</p>
		<form action="process.php" >
			

			<input type="submit" value="Reset">
		</form>
		
		
	</div>

</body>
</html>