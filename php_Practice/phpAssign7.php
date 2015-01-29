<?php


// $users['first_name'] = "Bonden";
// $users['last_name'] = "Harriss";

?>

<p>There are <?= count($users)?> keys in this array: first_name, last_name</p>
<p>The value in the key 'first-name' is <?= $users['first_name'] ?>.</p>
<p>The value in the key 'last-name' is <?= $users['last_name']?>.</p> 



<!-- 
function pass($count, $array){
	foreach($array as $key => $value) {
		$key_arr[] = $key;
	}
	echo "There are ".count($key_arr)." keys in this array: ".array_values($key_arr)." <br>";
	foreach ($array as $key => $value) {
		echo "The value in the key '".$key."'.$value"'.<br>";
	}
}

$users['first_name'] = "Bonden";
$users['last_name'] = "Harriss";

pass($users);
 -->