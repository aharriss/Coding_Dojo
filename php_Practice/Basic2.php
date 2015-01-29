

<?php

// // 1.
// $states = array('CA', 'WA', 'VA', 'UT', 'AZ');

// for($i=0; $i<count($states); $i++)

// echo "<option value=".$states[$i].">".$states[$i]."</option>";



// 2.


?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>states</title>
	</head>
<body>
	<select>
		<?php
		$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
		foreach($states as $key => $values) 
{

	echo '<option value=" ">'.$values.'</option>';
};

?>
</select>
</body>
</html>

	
<!-- 
// $key_arr = array();

// 3.
// $states = array('CA', 'WA', 'VA', 'UT', 'AZ', 'NJ', 'NY', 'DE');

// for($i=0; $i<count($states); $i++)

// echo "<option value=".$states[$i].">".$states[$i]."</option>";
 -->