<?php

	session_start();
	require('wall_conection.php');

//QUERIES-----
//Message query----
	$message_query = "SELECT messages.*, users.first_name, users.last_name
						FROM messages
						JOIN users ON users.id = messages.users_id
						ORDER BY id ASC";



	$messages = fetch_all($message_query);
// var_dump($_SESSION);

//Comment query----
	$comment_query = "SELECT comments.*, users.first_name, users.last_name
						FROM comments
						JOIN users ON users.id = comments.users_id
						ORDER BY id ASC";

	$comments = fetch_all($comment_query);
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>CodingDojo Wall</title>
	<meta name="description" content="Wordstream assignment">
	<link rel="stylesheet" type="text/css" href="wallCSS.css">

</head>
<body>
	<div id="wrapper">
		<div>
			<h3>CodingDojo Wall</h3>
			<h1>Welcome <?php $_SESSION['user']['first_name']?> </h1>
			<a href = "WALLprocess.com">log off</a>
			<hr>
		</div>

		<form id='message' action='WALLprocess.php' method='post'>
			<h5>Post a message</h5>
			<input id='messagebox' type='textarea' name='messages' placeholder='type a message here...'>
			<input type='hidden' name='action' value='messages'>
			<input id = 'message_button' type='submit' value='Post Message'>
		</form>

			<div class="message_display">
<?php 			foreach($messages as $message)
				{
					$comment_query . $message['id'];
					$comments;
					// var_dump($message);
?>	
						<h4>Message from <?= $message['first_name']?> <?=$message['last_name']?>(<?=$message['created_at']?>)</h4>
							 <p><?= $message[' message'] ?></p>
<?php		
					foreach($comments as $comment)
					{?>
						<h4>Comment by <?= $comment['first_name']?> <?=$comment['last_name']?> (<?= $comment['created_at']?>)</h4>
								<p><?= $comment['comment'] ?></p>
<?php				
					}
?>
			</div>
				<form id='Comments' action='WALLprocess.php' method='post'>
					<h6>Post a comment</h6>
	<?php 			var_dump($_SESSION) ?>
					<input id='commentbox' type='textarea' name='comments' placeholder='type your comment here...'>
					<input type='hidden' name='action' value='comments'>
					<input id = 'comment_button' type='submit' value='Post Comment'>

				</form>
<?php
}
?>
			</div>
	</div>

</body>
</html>