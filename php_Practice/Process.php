<?php

// if(isset($_POST(')))
// 	{

		session_start();
		unset($_SESSION['count']);
		// $_SESSION = array ();
		session_destroy();

		header("Location: counter.php");





?>


