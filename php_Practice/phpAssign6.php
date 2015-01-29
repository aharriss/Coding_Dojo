<?php

function print_lists($A){
	echo "<ul>";
foreach ($A as $value){
echo "<li>".$value."</li>";
	};
	echo "<ul>";
}
$A = array(2,3,'hello');

echo print_lists($A);

?>