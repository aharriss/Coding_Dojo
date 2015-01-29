<?php

$x = array(4, 6, 1, 3, 5, 7, 25);
$stars = '';

function draw_stars($x)
	// {
	// 	foreach($x as $value)
	// 	{
	// 		$var = (str_repeat("*", $value) . "<br>");
	// 		echo $var;
	// 		"<br>"; 
	// 	}
	// 	echo draw_stars($x);
	// }

	// 	// // foreach($array as $value);
	// 	// {
	// 	// 	$star = str_repeat("*", $value); 
	// 	// 	echo $star;
	// 	// 	echo '<br>';
	// 			// $stars=$stars . (str_repeat('*', $value));
	// 		// $stars = . $star;
	// 	// }
	// 	// echo $stars;





// FOR LOOP VERSION
	for($i=0; $i<count($array); $i++)
	{
		$var = str_repeat('*', $array[$i]);
		echo $var . '<br>';
	}

	}
echo draw_stars($x);


?>
