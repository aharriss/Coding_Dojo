<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTML Table</title>
	<meta name="description" content="PPC Lubricant">
	<link rel="stylesheet" type="text/css" href="HTMLtableCSS.css">

</head>
	<body>	
<?php
$users = array(
			array('first_name' => 'Michael', 'last_name' => 'Choi'),
			array('first_name' => 'John', 'last_name' => 'Supsupin'),
			// array('first_name' => 'Mark', 'last_name' => 'Guillen'),
			// array('first_name' => 'KB', 'last_name' => 'Tonel'),
			// array('first_name' => 'Adam', 'last_name' => 'Harriss'),
			// array('first_name' => 'Yo', 'last_name' => 'Rex'),
			// array('first_name' => 'John', 'last_name' => 'Lennon'),
			// array('first_name' => 'Paul', 'last_name' => 'McCartney'),
			// array('first_name' => 'Michael', 'last_name' => 'Jackson'),
			// array('first_name' => 'BONDEN', 'last_name' => 'HARRISS'),
			// array('first_name' => 'George', 'last_name' => 'Harrison'),
			// array('first_name' => 'Ringo', 'last_name' => 'Star'),
			// array('first_name' => 'Blue', 'last_name' => 'Bear'),
			// array('first_name' => 'Catie', 'last_name' => 'Harriss')
			);
?>
		<table>
			<thead>
				<tr>
					<?php
					// Create an array with the data for the thead
					$header= array('User #', 'First Name', 'Last Name', 'Full Name', 'Full Name in Upper Case', 'Length of Full Name');
					foreach($header as $values)
						{ ?>
							<th class= "row1"><?php echo $values; ?></th><?php
						};?>
				</tr>
			</thead>
				<tbody>
					<?php 
						// Use the $users array to fill the table <td> with data
						foreach($users as $index => $user)
						{	// Create a for loop to highlight every 5th row black with white letters
					?>			
								<tr>
									<td><?= $index + 1 ?></td>	
								<?php 
								foreach($user as $key=>$name)
								{ ?> 
									<td><?= $name ?></td>
									<td><?= $temp = tmpfile($name); 



									<?php

								};?>
								</tr>	
					<?php	} ?>
				</tbody>
		</table>
	</body>
</html>