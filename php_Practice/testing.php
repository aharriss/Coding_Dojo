<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Multiplication Table</title>
	<meta name="description" content="PPC Lubricant">
	<link rel="stylesheet" type="text/css" href="MULTIPLICATIONtable.css">

</head>

<body>

<table>
	<thead>
		<tr>
			<?php for($i=0; $i<10; $i++)
			{ ?>
				<th><?php echo $i; ?></th>
			<?php } ?>

		</tr>
	</thead>
	<tbody>
		<?php for($i=1; $i<10; $i++) 
		{
				if($i % 2 == 1)
				{
					?>
					<tr class = "A">
					<?php
				}
				else 

				{?>

				<tr><?php 
				} ?>
					<td><strong><?php echo $i; ?></strong></td>
						<?php for($j=1; $j<10; $j++);



		?>
</body>
</html>