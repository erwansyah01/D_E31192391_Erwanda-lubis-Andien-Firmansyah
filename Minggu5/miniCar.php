<?php
include 'Car.php';
class miniCar implements CAr {
	private $model;

	public function setModel($name)
	{
		$this -> model1 = $name;
	}

	public function getModel()
	{
		return $this -> model;S
	}
}
?>