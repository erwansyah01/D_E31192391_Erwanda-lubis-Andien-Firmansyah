<?php

include 'Circle.php';

class Rectangle implements Shape {
	private $width;
	private $height;

	public function  __construct($width, $height)
	{
		$this -> width = $width;
		$this -> height = $height;
	}

	// calcArea calculates the are of rectangles
	public function calcArea()
	{
		return $this -> width * $this -> height;
	}
}

$circ = new Circle(3);
$rect = new Rectangele(3,4);

echo $circ -> calcArea();
echo $rect -> calcArea();
?>