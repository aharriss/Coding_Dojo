<?php 
session_start();
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey</title>
	<meta name="description" content="Survey Form">
	<link rel="stylesheet" type="text/css" href="surveyCSS.css">


</head>

<body>

	<div id="wrapper">

		
		<form action="success.php" method='post'>
			<p>Your Name: <input type ='text' name='first_name'></p>
			<p>Dojo Location:<select value= 'cities' name = 'dojocity'>
				<option disable selected>options</option>
				<option value='san jose'>San Jose</option>
				<option value='san diego'>San Diego!!!</option>
				<option value='london'>London</option>
				</select></p>


			<p>Favorite Language:<select value = 'languages' name = 'favlang'>
				<option disable selected>options</option>
				<option value='python'>Python</option>
				<option value='php'>php</option>
				<option value='c++'>C++</option>
				<option value= 'spanish'>Spanish ;-)</option>
				</select></p>

			<p>Comment (optional):</p> 
			<input id='commentbox' type='textarea' name='comment'>


			<p><input type="submit" value="Submit"></p>
		</form>
		
		
	</div>

</body>
</html>