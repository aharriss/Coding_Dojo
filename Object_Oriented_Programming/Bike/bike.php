<?

class Bike
{
	public $price;
	public $max_speed;
	public $miles;

	public function __construct($price_p, $max_speed_p)
	{
		$this->price = $price_p;
		$this->max_speed = $max_speed_p;
		$this->miles = 0;
	}
	public function displayInfo()
	{
		echo $this->price. '<br>';
		echo $this->max_speed. '<br>';
		echo $this->miles. '<br>';
		return $this;
		//bike's price, maximum speed, and total miles driven
	}
	public function drive()
	{
		echo 'Driving...<br>';
		echo $this->miles += 10;
		echo 'miles driven <br>';
		return $this;
		//show "driving" on the screen and increase the total miles driven by 10
	}
	public function reverse()
	{
		if($this->miles < 5)
		{
			echo 'can not reverse.';
		}
		else
		{
			echo 'Reversing...<br>';
			echo $this->miles -= 5;
			echo 'miles driven <br>';
			return $this;
		}		
	}
}

$bike1 = new Bike(100, "10mph");
$bike2 = new Bike(200, "20mph");
$bike3 = new Bike(300, "30mph");

?>

<html>
<head>
	<title>BIKES MAN</title>
</head>
<body>

<h3>Bike 1</h3>
<?php 
$bike1->displayInfo()->drive()->drive()->drive()->reverse();
?>

<h3>Bike 2</h3>
<?php 
$bike2->displayInfo()->drive()->drive()->drive()->reverse();
?>

<h3>Bike 3</h3>
<?php 
$bike3->displayInfo()->drive()->drive()->drive()->reverse();
?>

</body>
</html>

