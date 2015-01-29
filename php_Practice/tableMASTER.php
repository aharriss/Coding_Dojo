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
	<?php for ($i=1; $i <=3; $i++) 
	{ ?>
	<tr>
	<?php
		for($j=1; $j<=3; $j++)
		{ ?>		
		<td><?php echo $i; ?>x<?php echo $j;?></td>
		<?php	}?>
	</tr>
	<?php } ?>
</table>


</body>
</html>

