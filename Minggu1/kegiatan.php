<?php
//declare class
class Car {
	//propertise
	public $comp;
	public $color = 'beige';
	public $hasSunRoof = true;

	// methode = Hello
	public function ()
	{
		return "beep";
	}
}

// membuat instance
$bmw = new Car ();
$mercedes = new Car ();

// get values
echo $bmw -> color; // beige
echo "<hr />";

// set values
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

//get value 
echo $bmw -> color; //blue
echo "<br />";
echo $mercedes -> color; // beige
echo "<br />";
echo $bmw -> comp; // BMW
echo "<br />";
echo $mercedes -> comp; // Mercedees Benz
echo "<hr />";

// methode get a beep
echo $bmw -> hello (); // beep
echo "<br />";
echo $mercedes -> hello (); //beep
?>