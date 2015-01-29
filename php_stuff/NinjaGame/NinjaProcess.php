<?php
session_start();

// create points array in session
function initializePoints() {
	$_SESSION['points'] = array(
		'total' => 0,
		'farm' => 0,
		'cave' => 0,
		'house' => 0,
		'casino' => 0
	);
}

// find random number of points for a building
function pointsForBuilding($name) {
	switch ($name) {
	    case "farm":
	        return rand(10, 20);
	    case "cave":
	        return rand(5, 10);
	    case "house":
	        return rand(2, 5);
	    case "casino":
	    	$casino_points = rand(0, 50);
	    	$win_or_lose = rand(0,10);
			if ($win_or_lose <=7) {
				$casino_points = -1 * $casino_points;
			}
			return $casino_points;
	}
}

// if point not in session initialize it
if (!isset($_SESSION['points'])) {
	initializePoints();
}

// get points from session
$points = $_SESSION['points'];

// get the building name
$building_name = $_POST['building'];
var_dump($building_name);
var_dump($points);
// check whether if exists i.e. was in $_POST

// if it exists, add points to the points in session
$points[$building_name] += pointsForBuilding($building_name);

$total = $points['farm'] + $points['cave'] + $points['house'] + $points['casino']; 
$points['total'];

$_SESSION['points'] = $points['total'];
header('Location: INDEXninja.php');

?><p>You entered a farm and earned <?php $_POST($_points['farm'])?>golds. <? $date = date_create('2014-01-26 H:i:s')?></p>;
?><p>You entered a farm and earned <?php $_POST($_points['cave'])?>golds. <? $date = date_create('2014-01-26 H:i:s')?></p>;
?><p>You entered a farm and earned <?php $_POST($_points['house'])?>golds. <? $date = date_create('2014-01-26 H:i:s')?></p>;
?><p>You entered a farm and earned <?php $_POST($_points['casino'])?>golds. <? $date = date_create('2014-01-26 H:i:s')?></p>;