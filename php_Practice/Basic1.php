<?php

// 1 and 2.
$score = rand (50,100);

// 3.

if($score<70)
	{
	echo "<h1>Your score: ".$score."/100.</h1>";
	echo "<h2>Your grade is D.</h2>";
}	

elseif($score>= 70 && $score < 80)
{
	echo "<h1>Your score: ".$score."/100.</h1>";
	echo "<h2>Your grade is C.</h2>";

}
elseif($score>= 80 && $score < 90)
{
	echo "<h1>Your score: ".$score."/100.</h1>";
	echo "<h2>Your grade is B.</h2>";

}
elseif($score>=90){	
	echo "<h1>Your score: ".$score."/100.</h1>";
	echo "<h2>Your grade is A.</h2>"; 
}