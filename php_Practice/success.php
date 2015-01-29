<?php 
session_start();
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey</title>
	<meta name="description" content="Survey Form">
	<link rel="stylesheet" type="text/css" href="successCSS.css">


</head>

<body>

	<div id="wrapper">

		<h4>Thanks for submitting this form! You have submitted this form
<?php
			if (!isset($_SESSION['count'])) {
					  echo $_SESSION['count'] = 0;
					} else {
					  echo $_SESSION['count']++;
					}
?>
				times now.</h4>

		<div id='submitted_info'>
		<h2>Submitted Information</h2>
			<p>Your Name: 
<?php			
			if(isset($_POST['first_name']))
			{
				$_SESSION['first_name'] = $_POST['first_name']; 
			}
?>			
			<?= $_SESSION['first_name']; ?></p>

			<p>Dojo Location: 
<?php			
			if(isset($_POST['dojocity']))
			{
				$_SESSION['dojocity'] = $_POST['dojocity'];
			}
?>
			<?= $_SESSION['dojocity']; ?></p>

			<p>Favorite Language:
<?php			if(isset($_POST['favlang']))
			{
				$_SESSION['favlang'] = $_POST['favlang'];
			}
?>
			<?= $_SESSION['favlang']; ?></p>

			<p>Comment (optional):
<?php			if(isset($_POST['comment']))
			{
				$_SESSION['comment'] = $_POST['comment'];
			}
?>
			<?= $_SESSION['comment']; ?></p> 


			<p><input type="go_back" value="Go Back"></p>

		</div>
		
	</div>

</body>
</html>	