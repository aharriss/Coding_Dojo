<?php

class MyFirstClass
{
	//class methods and properties go here
	public $my_property = 'my text of my property';
}

//object name = new instance of that class of objects
$obj = new MyFirstClass();
echo $obj->my_property.'<br>';
$obj->my_property = 'changed the value of my_property';
echo $obj->my_property.'<br>';
echo $obj->my_property.'<br>';

$obj2 = new MyFirstClass();
echo $obj2 ->my_property.'<br>';
$obj2->my_property = 'changed the value of my_property of obj 2';
echo $obj2->my_property;



// $obj = new MyFirstClass();
// $obj1 = new MyFirstClass();
// $obj2 = new MyFirstClass();
// $obj3 = new MyFirstClass();
// $obj4 = new MyFirstClass();



// var_dump($obj);
// var_dump($obj1);
// var_dump($obj2);
// var_dump($obj3);
// var_dump($obj4);

?>
