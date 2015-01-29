<?php

class MyFirstClass
{
	public $my_property = 'default value';

	public function get_my_property()  //--- this is a method: a "get" method
	{
		return $this->print_hello().' '.$this->my_property;
	}

	public function set_my_property($value) //--- this is a method: a "set" method. These work together to get and set the value for a particular property
	{
		$this->my_property = $value;
	}

	public function print_hello()
	{
		return 'Hello';
	}
}

$obj = new MyFirstClass();
echo $obj->get_my_property();'<br>';
$obj->set_my_property('obj 1 property value'); //this only changes the value for this particular instance. obj2 will continue to be the same as the orginal as specified by the class
echo $obj->get_my_property().'<br>';

$obj2 = new MyFirstClass();
echo $obj2->get_my_property().'<br>';
$obj->set_my_property('obj 1 property value');
echo $obj->get_my_property().'<br>';

$obj2 = new MyFirstClass();

?>