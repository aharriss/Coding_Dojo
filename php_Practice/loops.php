<?php

$students = array(
	array("first_name" => "Randall", "last_name" => "Frisk", "age" => 27),
	array("first_name" => "Michael", "last_name" => "Choi", "age" => 33),
	array("first_name" => "Charles", "last_name" => "Holloman", "age" => 27)
	);

foreach ($students as $row)
{
	foreach ($row as $info => $value) 
	{
		echo $info.' '.$value.' ';
	}
	echo '<br>';

}




// $students = array(
// 				array("Randall", "Frisk", 27),
// 				array("Randall", "Choi", 33),
// 				array("Charles", "Holloman", 27)
// 				);

// for ($i = 0; $i < count($students); $i++)
// {
// 	for ($j = 0; $j < count($students[$i]); $j++)
// 	{
// 		echo $students[$i][$j].' ';
// 	}
// 	echo '<br>';
}

// 

// $student = array("Randall", "Michael", "Charles");

// for ($i = 0; $i < count($students); $i++)
// {
// 	echo $students[$i].'<br>';
// }


// 

// for($i = 0; $i < 10; $i==)
// {
// 	echo $i. '<br>';
// 	for ($j = 0; $j < 5; $j++)
// 	{
// 		echo $j;
// 	}
// 	echo '<br>';
// }

?>