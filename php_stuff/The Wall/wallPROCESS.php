<?php
	session_start();
	require('wall_conection.php');

// echo "<pre>";
// var_dump($_POST);
// echo"</pre>";

//see if the user is trying to login
if(isset($_POST['action']) && $_POST['action'] =='login')
{
	$query = "SELECT * FROM users 
				WHERE users.password = '{$_POST["password"]}' AND users.email = '{$_POST["email"]}'";

	$users = fetch_all($query);
	// var_dump($_SESSION);
	if(count($users) == 1)
	{
		$_SESSION['logged_in'] = true;
		$_SESSION['user']['first_name'] = $users[0]['first_name'];
		$_SESSION['user']['last_name'] = $users[0]['last_name'];		
		$_SESSION['user']['id'] = $users[0]['id'];
			header("Location: WALLindex.php");
	}
	else
	{
		echo "wrong credential";
	}
}
elseif(isset($_POST['action']) && $_POST['action'] == 'messages')
		{
		vardump($_SESSION);

		$query = "INSERT INTO messages (message, user_id, created_at) VALUES ('".$_POST['messages']."','".$_SESSION['user']['id']."', NOW())";

			run_mysql_query($query);
			// var_dump($query);
			header("Location:WALLindex.php");
		}
		elseif(isset($_POST['action']) && $_POST['action'] == 'comments')
		{

			$query = "INSERT INTO comments (comment, user_id, message_id, created_at) VALUES ('".$_POST['comment']."','".$_SESSION['user']['id']."','".$_POST['message_id']."', NOW())";
					run_mysql_query($query);
					header("Location: WALLindex.php");
		}
				else
				{
					session_destroy();
					header("Location: loginANDregistration.php");
				}