<?php

class Car {

	//private
	private $model;

	public function getModel()
	{
		return "The car model is " . $this -> model;
	}
}

$mercedes = nem Car();

////akses prperty dari luar class
$mercedes -> model = "Mercedes Benz";
echo $mercedes -> getModel();

?>