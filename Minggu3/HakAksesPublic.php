<?php

class CAr {

	//public methode & properties
	public $model;

	public function getModel ()
	{
		return "the car model is " . $this -> model;
	}
}

$mercedes = new Car();
//akses property dari dalam class 
$mercedes -> model = "Mercedes Benz";
//akses prperty dari luar class 
echo $mercedes -> getModel();

?>