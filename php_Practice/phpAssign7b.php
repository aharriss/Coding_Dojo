<?php



function user_pass($array){
	$key_arr = array();
	foreach ($array as $key => $value) {
		$key_arr[] = $key;
	}
	echo "There are ".count($key_arr)." keys in this array: ".implode(", ",$key_arr)." <br>";
	foreach ($array as $key => $value) {
		echo "The value in the key '".$key."' is '".$value."'.<br>";
	}
}
$users['first_name'] = "Bonden";
$users['last_name'] = "Harriss";

user_pass($users);

?> 