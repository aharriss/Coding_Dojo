<?php

class Car
{
	public $price;
	public $speed;
	public $fuel;
	public $mileage;
	public $tax;

	public function __construct($price_p, $speed_p, $fuel_p, $mileage_p)
	{
		$this->price = $price_p;
		$this->speed = $speed_p;
		$this->fuel = $fuel_p;
		$this->mileage = $mileage_p;
	}
	public function listing()
	{
		echo 'Price: ' . $this->price. '<br>';
		echo 'Speed: ' . $this->speed. '<br>';
		echo 'Fuel: ' . $this->fuel. '<br>';
		echo 'Mileage: ' . $this->mileage. '<br>';
		echo 'Tax: ' . $this->tax. '<br>';

		if($this->price >10000)
		{
			$this->tax = $this->price * 0.15;
		}
		else
		{
			$this->tax = $this->price * 0.12;
		}
	}
}

$car1 = new Car(2000, "80mph", "Full", "30mpg");
$car2 = new Car(5000, "100mph", "Partly Full", "25mpg");
$car3 = new Car(7000, "110mph", "Kind of Full", "36mpg");
$car4 = new Car(11000, "150mph", "Full", "38mpg");
$car5 = new Car(20000, "178mph", "Empty", "21mpg");

?>

<html>
<head>
	<title>Cars</title>
</head>
<body>
<?php
$car1->listing();
?>
<hr>
<?php
$car2->listing();
?>
<hr>
<?php
$car3->listing();
?>
<hr>
<?php
$car4->listing();
?>
<hr>
<?php
$car5->listing();
?>

</body>
</html>




