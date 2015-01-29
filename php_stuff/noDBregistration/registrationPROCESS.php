<?php
//how we use errors in validation: session.
session_start();

$mm = '';
$dd = '';
$yyyy = '';

// var_dump($_POST);
$errors = array();

// create points array in session
// function initializeregistration() {
// 	$_SESSION['register'] = array(
// 		'email' => 0,
// 		'first_name' => 0,
// 		'last_name' => 0,
// 		'password' => 0,
// 		'conf_password' => 0,
// 		'birth_date' => 0,
// 		'upload_image' => 0
// 	);
// }

$_SESSION['errors'] = $errors;

var_dump($_POST);

if (!isset($_POST['email']) or !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
{
	$_POST['email'] = '';
	$errors['email'] = 'No valid email entered';
}
if (!isset($_POST['first_name']) and (isset($_POST['first_name']) and strlen($_POST['first_name'] < 2)))
{
	// $A = strlen($_POST['first_name']);
	// echo $A;
	$_POST['first_name'] = '';
	$errors['first_name'] = 'No valid name entered. Name must be at least 2 letters long.';
	// echo $errors['first_name'];
}
// if (!isset($_POST['last_name']) and strlen($_POST['last_name'] < 2))
// {
// 	$_POST['last_name'] = '';
// 	$errors['last_name'] = 'No valid last name entered';
// }
// if (!isset($_POST['password']) and strlen($_POST['password'] < 6))
// {
// 	$_POST['password'] = '';
// 	$errors['password'] = "Must enter a password of at least 6 characters";
// }
// if (!isset($_POST['confirm_password']) and ($_POST['confirm_password'] != $_POST['password']))
// {
// 	$_POST['confirm_password'] = '';
// 	$errors['confirm_password'] = 'Your password did not match';
// }
// if (!isset($_POST['birth_date']) and strlen($_POST['birth_date'] < 4))
// {
// 	$_POST['birth_date'] = '';
// 	$errors['birth_date'] = 'No valid birth date entered';
// }
// if (!isset($_POST['profile_picture']))
// {
// 	$_POST['profile_picture'] = '';
// 	$errors['profile_picture'] = 'No profile picture uploaded';
// }
var_dump($errors);

// echo $errors['first_name'];
// header('Location: INDEXregistration.php');















// if(isset($_POST['action']) && $_POST['action'] == 'register')
// {
// 	$errors = array();
// 	// empty array to collect errors
// 	if(isset($_POST['email']))
// 	{
// 		$email_errors[ ] = "Email address was not valid.";
// 	}
// 	if(count($first_name_errors)>0)
// 		{
// 			// if there are errors, assign the session variable!
// 			$_SESSION['error'] = $errors;
// 			//redirect your user back using header('location: ')
// 		}
// 		elseif(count($last_name_errors)>0) 
// 		{
// 			$_SESSION['error'] = $errors;
// 		}
// 		else
// 		{
// 			$_SESSION['success'] = "Your information was valid!";
// 			//redirect user to the next part of the site!
// 		}
// }
// //if statement to determine if email is valid & direct user to the appropriate page.
// 	if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
// 	{
// 		$_SESSION["email"] = $_POST["email"];
// 		header('Location: INDEXregistration.php');
// 	}
// else
// 	{
// 		$_SESSION["email"] = $_POST["email"];
// 		$email_error = 'Error: Not a valid email address. Please input email again.';
// 	}

// There are no numbers in first name.



// There are no numbers in last name.
	



?>