
<?php

// function multiply($array){
// foreach($array as $value) {
// $value = 5 * $value;
// echo $value;

// $A = array(2, 4, 10, 16);

// multiply($A);

$A = array(2, 4, 10, 16);

function multiply($array, $factor){
$B = array( );
foreach ($array as $value) {
$B[ ] = $factor * $value;
}
var_dump($B);
}
multiply($A, 5);


