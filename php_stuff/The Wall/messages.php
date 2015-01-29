<?php
	session_start();
	require('new_connection.php');


//POSTING A MESSAGE------------------------------------------------------------





//POSTING A COMMENT------------------------------------------------------------


else //now you need to insert the data into the database!
		{
			$query = "INSERT INTO users (first_name, last_name, password, email, created_at, updated_at)
					VALUES ('{$post['first_name']}', '{$post['last_name']}', '{$post['password']}', '{$post['email']}', NOW(), NOW())";
			run_mysql_query($query);
			$_SESSION['success_message'] = 'User successfully created!';
			header('location: WALLindex.php');
			die();
		}

?>