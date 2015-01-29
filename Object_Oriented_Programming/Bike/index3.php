<?php

class Person
{
	public $first_name;
	public $last_name;

	public function __construct($first_name_p, $last_name_p) //when you create a function inside of a class, it knows to automatically call it when you create a new instance. These have nothing to do with the first names listed above.

	{
		$this->first_name = $first_name_p;
		$this->last_name = $last_name_p;
	}
}

$new_person1 = new Person('John', 'Lennon');
echo $new_person1;
// var_dump($new_person1); 

$new_person2 = new Person('Paul', 'McCartney');
// var_dump($new_person2);

?>