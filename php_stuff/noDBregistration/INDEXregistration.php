<?php
session_start();

$_SESSION['errors']['email'] = '';
$_SESSION['errors']['first_name'] = '';
$_SESSION['errors']['last_name'] = '';
$_SESSION['errors']['password'] = '';
$_SESSION['errors']['confirm_password'] = '';
$_SESSION['errors']['birth_date'] = '';
$_SESSION['errors']['profile_picture'] = '';


// $email= '';
// $first_name= '';
// $last_name= '';
// $password = '';
// $confirm_password = '';
// $birth_date = '';
// $profile_picture = '';

// if(isset($_SESSION['errors']))
// {
// 	foreach($_SESSION['errors'] as $error)
// {	echo "<p>" . $error . "</p>";
// }
// };
// var_dump($_SESSION)
?></p>
			
			</div>
		<form action="registrationPROCESS.php" method = 'post'>
			<div class="requests">	
				<p class="input_request">*email:</p>
				<input class="textbox" name='email' type ="text">				
				<p class="error"><?php $_SESSION['errors']['email']?></p>
			</div>

			<div class="requests">	
				<p class="input_request">*first_name:</p>
				<input class="textbox" name='first_name' type ="text">				
				<p class="error"><?php $_SESSION['errors']['first_name']?></p>
			</div>

			<div class="requests">	
				<p class="input_request">*last_name:</p>
				<input class="textbox" name='last_name' type ="text">				
				<p class="error"><?php $_SESSION['errors']['last_name']?></p>
			</div>

			<div class="requests">	
				<p class="input_request">*password:</p>
				<input class="textbox" name='password' type ="text">				
				<p class="error">
				<p class="error"><?php $_SESSION['errors']['password']?></p>
			</div>

			<div class="requests">
			<p class="input_request">*confirm password:</p>
				<input class="textbox" name="confirm_password" type ="text">
				<p class="error">
				<p class="error"><?php $_SESSION['errors']['confirm_password']?></p>
			</div>

			<div class="requests">
			<p class="input_request"> birth date:</p>
				<input class="textbox" name='birth_date' type ="text">
				<p class="error">
				<p> mm, dd, yyyy </p>
				<p class="error"><?php $_SESSION['errors']['birth_date']?></p>			
			</div>
			<div class="requests">
			<p class="input_request"> Profile picture:</p>
				<input class="textbox" name='profile_picture' type ="text">
				<p class="error">	
				<p class="error"><?php $_SESSION['errors']['profile_picture']?></p>

				<input type="hidden" name="action" value="register">
				<input class="blue" id="button1" type="submit" value="Submit">
			</form>
			</div>	
			
	</div>	
</body>
</html>