<?php

// print factorial(9);

// Function factorial($number)
// {
// 	if($number == 0) return 1;
// 	return $number * factorial($number-1);
// }


// $output = ($var1 + $var0)

// function fib($x){
// 	if ($x == 0)
// 	{
// 		return 0;
// 	}
// 		if ($x == 1)
// 		{
// 			return 1;
// 		}
// 	$output = fib($x-1) + fib($x-2);
// 	return $output;
// }
// echo (fib(4));


function choi($n)
	{
	if($n==1)
		return 0;
	if($n==2)
		return 5;
	if($n==3)
		return 3;
	if($n>100)
		{
		return 0;
		}
	elseif($n>-100)
		{
		$output=($n-3)+($n-2)-($n-1);
		}
	}
echo (choi(10));

?>