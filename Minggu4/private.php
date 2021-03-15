<?php
//the parent class
class Car {
	//this $model property is private, this it can be accesed
	//only from inside the class 
	private $model;
	//public setter methode
	public function setModel($model)
	{
		$this -> model = $model;
	}
}

// the child class
class SportsCar extends Car{
	// tries to get a private property that belongs to the parent
	public function hello()
	{
		return "beep! i am a <i>" . $this -> model . "</i><br />";
	}
}
// create an instance from the child class
$sportsCar1 = nem SportsCar();
// set the class model name
$sportsCar1 -> setModel('Mercedes Benz');
?>