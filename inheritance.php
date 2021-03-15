<?php
//the parent class
class Car {
	//private property inside the class
	private $model;

	//public setter methode
	public function setModel($model)
	{
		$this -> model = $model;
	}

	public function hello()
	{
		return "beep! i am a <i>" . $this -> model . "</i><br />";
	}
}

//the child class inherits the code from the parent class
class SportsCar extends Car {
	//no code inthe child class
}

//create an instance from the child class
$sportsCar1 = new SportsCar();


//set  the value of the class' property
// for this aim, we use a methode that we create in the parent
$sportsCar1 -> setModel('Mercedes Benz');

//use another methode that the child class inherited from the parent class
echo $sportsCar1 -> hello();
?>