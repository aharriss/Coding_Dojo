<?php

class Animal
{
	//attributes
	public $name;
	public $health;

	public function __construct($name_p)
	{
		$this->name = $name_p;
		$this->health = 100;
	}
	public function walk($times) //methods are a function inside of a class container. Each time we create a new instance of that particular class object, we can call that function from that object.
	{
		echo $this->name;
		echo ' is now ';
		echo 'walking: <br>';
		echo 'health level is now...';
		echo $this->health -= 1;
		echo '<br>';
		return $this;
	}
	public function run($times)
	{
		echo 'and now he is running: <br>';
		echo 'health level is now...';
		echo $this->health -= 5;
		echo '<br>';
		return $this;
	}

	public function displayHealth()
	{
		echo $this->name;
		echo 'health level is now...<br>';
	}
}

	$animal = new Animal('Kenny');
	// var_dump ($animal);
	$animal->walk(3)->run(2);
	echo '<br>';

//----------------------------------------------------------------------

		class Dog extends Animal
		{
			public function __construct($name_p)
			{
				$this->name = $name_p;
				$this->health = 150;
			}
			public function pet($times)
			{
				echo 'and now he is being petted: <br>';
				echo 'so his health is now...';
				echo $this->health += 5;
				echo '<br>';
				return $this;
			}
			// public function displayHealth()
			// {
			// 	echo $this->name;
			// 	echo 'health level is now...<br>';
			// }
		}
		$dog = new Dog('Kenny');
		// var_dump ($animal);
		$dog->walk(3)->run(2)->pet(1);
		echo '<br>';

//----------------------------------------------------------------------

		class Dragon extends Animal
		{
			public function fly()
			{
				echo 'and now he is flying:<br>';
				echo 'and his health is now...';
				echo $this->health -= 10;
				echo '<br>';
				return $this;
			}
			// public function displayHealth()
			// {
			// 	echo $this->name;
			// 	echo 'health level is now...<br>';
			// }
		}

		$dragon = new Dragon(170);

		$dragon->walk(3)->run(2)->fly(2);


?>