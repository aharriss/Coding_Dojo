// <?php
// session_start();
// var_dump($_POST);

// var_dump($_SESSION['rand']);

// if(!isset($_SESSION['rand']))
// {
// 	$_SESSION['rand'] = rand(0, 10);
// }

// if($_POST['guess'] == $_SESSION['rand'])
// 	{
// ?>		<div id="Correct">
// 			<p><?=$_POST['guess']?> was the number!</p>
// 			<input type="submit" value="Play Again">
// 		</div>
// <?php	
// 	}
// 	elseif($_POST['guess'] < $_SESSION['rand'])

// 	{	?><div id="toolow">
// 			<p>Too low!</p>
// 			<input type="submit" value="Submit">
// 		</div>
// <?php
// 	}		
// 	elseif($_POST['guess'] > $_SESSION['rand'])

// 	{	?><div id="toolow">
// 			<p>Too high!</p>
// 			<input type="submit" value="Submit">
// 		</div>
// <?php	
// 	}?>