<?php
//the parent class 
class Car {
	// the model property is now protected, so it can be accessed
	//from within the class and its child classes
	protected $model;

	//public setter methode
	public function setModel($model)
	{
		$this -> model = $model;
	}
}

//the child class 
class SportsCar extends Car {
	//has no problem to get a protected property that belongs to get parent
	public function hello()
	{
		return "beep! i am a <i>" . $this -> model . "<i><br />";
	}
}

//create an instance from the child class
$sportsCar1 = new SportsCar();
?>