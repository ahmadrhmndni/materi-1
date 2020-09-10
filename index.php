<?php  

class mobil {
	public $merk, $tipe, $mesin, $max_speed;
	public function cetakTipe(){
		return $this->tipe;
		}
		function kecepatanMaksimal(){
			return "Kecepatan Maksimal Dari Mobil Ini Adalah".$this->max_speed;
	
	}
}

$bmw = new Mobil;
$bmw ->merk = "BMW";
$bmw ->tipe = "320i";
$bmw ->mesin = "2000cc";
$bmw ->max_speed = "280 km/h";

$bmw2 = new Mobil;
$bmw2->merk = "BMW";
$bmw2->tipe = "320i";
$bmw2->mesin = "2000cc";
$bmw2->max_speed = "280 km/h";

echo "$bmw2->tipe";
echo "<br>";
echo "$bmw2->tipe";

if ($bmw === $bmw2){
	echo "sama";
}else{
	echo "tidak";
}




