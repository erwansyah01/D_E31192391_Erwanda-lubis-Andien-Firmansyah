<?php
class Car {

	//properties
	public $comp;
	public $color = 'beige';
	public $hasSunroof = true;

	//methode = hello
	public function hello ()
	{
		return "beep i am a <i>" . $this -> comp .
			"</i>, and i am <i>" . $this -> color;
	}

}

//create object di class
$bmw = new Car ();
$mercedes = new Car ();

//set value
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

//call hello methode untuk $bmw object
echo $bmw -> hello ()
?>