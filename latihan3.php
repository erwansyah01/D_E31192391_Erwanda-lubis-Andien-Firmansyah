<?php 
	class Tablet
	{
		public $merk;
		private $camera;
		protected $memory='64GB';

		public function camera($tes)
		{
			$camera=$this-> camera=$tes;
			return " kualitas Kamera = <b>".$camera."</b>";
		}
	}

	class handphone extends Tablet
	{
		private $handphone_baru;

		public function beli_handphone()
		{
			$merk=$this -> merk;
			$memory=$this -> memory;
			$handphone_baru=$this -> handphone_baru = "Beli Hp Baru Merek <b>".$merk."</b> ,  jumlah memory = <b>".$memory."</b>";
			return $handphone_baru;

		}
	}

	$test=new handphone();
	$test-> merk='Samsung';
	$camera=$test-> camera('32 MP');
	$coba=$test-> beli_handphone();
	echo $coba.' '.$camera;
 ?>