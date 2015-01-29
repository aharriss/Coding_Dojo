

<?php

function display_temp($data)
{
	foreach($data as $states => $value)
	{
		foreach($value as $city => $temp){
			echo "$states"." ";
			echo "$city"." ";
			echo "$temp"."<br>";
		}
	}
}

function mgmt_ask($data, $query)
{
	$v1;
	$v2;
	$v3;

	
	foreach($query as $states => $city)
	{
		foreach($city as $c){


				if(!is_null($data[$states][$c]))
				{
					$v1 = $states;
					$v2 = $c;
					$v3 = $data[$states][$c];
					echo $v1." ".$v2." ".$v3;

				}
		}

	}
}


$temp_data =['CA' => ['LA' => '57', 'SF' => '45'],
			'NY' => ['NY' => '32']];
// display_temp($temp_data);

$query = ['NY' => ['NY']];
mgmt_ask($temp_data, $query);

?>