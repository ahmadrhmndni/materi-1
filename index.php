<?php  

class Mobil{
	public $merk, $tipe, $mesin, $max_speed;

	public function cetakTipe(){
		return $this->tipe;
	}
	public function kecepatanMaksimal(){
			return "Kecepatan Maksimal Dari Mobil Ini Adalah".$this->max_speed;
	}
		 function injakgas(){
			return "Mengalirkan bensin keruang bakar, rpm naik, roda berputar";
	}
	function injekgas(){
		return "Mengalirkan Pertalite keruang bakar, rpm naik, roda berputar";
	}
}

class BMW extends Mobil{

}

class dacia extends Mobil{
	function selfParking(){
		echo "Parkir Sendiri";
	}

	
}

$bmw = new Mobil;
$bmw->merk = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "2000cc";
$bmw->max_speed = "280 km/h";

$dacia = new Mobil;
$dacia->merk = "Daihatsu";
$dacia->tipe = "Model-A";
$dacia->mesin = "1500cc";
$dacia->max_speed = "200 km/h";

echo "BMW : ".$bmw->injakgas();
echo"<br>";
echo "DACIA : ".$dacia->injekgas();




