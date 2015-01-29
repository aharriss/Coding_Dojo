<?php
	session_start();
	require('wall_conection.php');

	if(isset($_POST['action']) && $_POST['action'] == 'register')
	{
		//call to function
		register_user($_POST); //use the ACTUAL POST!
	}

	else if(isset($_POST['action']) && $_POST['action'] == 'login')
	{
		login_user($_POST);	
	}
	else //malicious navigation to process.php OR someone is trying to log off!
	{
		session_destroy();
		header('location: loginANDregSUCCESS.php');
		// die();
	}

	function register_user($post) //just a parameter call post
	{
//begin validation checks----------------------------------------------------
		$_SESSION['errors'] = array();

		if(empty($post['first_name']))
		{
			$_SESSION['errors'][] = "first name can't be blank!";
		}
		if(empty($post['last_name']))
		{
			$_SESSION['errors'][] = "last name can't be blank!";
		}
		if(empty($post['password']))
		{
			$_SESSION['errors'][] = "password field is required!";
		}
		if($post['password'] !== $post['confirm_password'])
		{
			$_SESSION['errors'][] = "passwords must match!";			
		}
		if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL))
		{
			$_SESSION['errors'][] = "Please use a valid email address!";			
		}
//end of validation checks---------------------------------------------------

		if(count($_SESSION['errors']) >0)  //if I have any errors at all!
		{
			header('location: loginANDregistration.php');
			die();
		}
		else //now you need to insert the data into the database!
		{
			$query = "INSERT INTO users (first_name, last_name, password, email, created_at, updated_at)
					VALUES ('{$post['first_name']}', '{$post['last_name']}', '{$post['password']}', '{$post['email']}', NOW(), NOW())";
			run_mysql_query($query);
			$_SESSION['success_message'] = 'User successfully created!';
			header('location: loginANDregistration.php');
			die();
		}
}
//LOGIN STARTS HERE ---------------------------------------------------------
	function login_user($post) //just a parameter call post
	{
		$query = "SELECT * FROM users WHERE users.password =  '{$post['password']}' AND users.email = '{$post['email']}'";
	// echo $query;
	// die();

	$users = fetch_all($query); //go and attempt to grab a user with above credentials!
		if(count($users) > 0)
		{
			// var_dump($users);
			$_SESSION['user_id'] = $users[0]['id'];
			$_SESSION['first_name'] = $users[0]['first_name'];
			$_SESSION['logged_in'] = TRUE;
			header('location: WALLindex.php');
			
		}
		else
		{
			$_SESSION['errors'][] = "can't find a user with those credentials";
			echo "can't find a user with those credentials";
			header('location: loginANDregistration.php');
			die();
		}
	}



?>