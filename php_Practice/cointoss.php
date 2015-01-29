<?php

// function toss($t)
// {

$headcount = 0;
$tailcount = 0;

for($t=0; $t<5000; $t++)
{
	$toss = rand(0,1);
	if($toss == 0)
	{
		$description = "heads";
		$headcount = $headcount + 1;
	}
	else
	{
		$description = "tails";
		$tailcount = $tailcount + 1;
	}
?>

<p> Throwing a coin... It's <?= $description?>. <?= $headcount?> heads so far and <?= $tailcount?> tails so far.</p>

<?php

// echo toss(1);

}
?>