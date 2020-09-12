<?php 

class Hewan {
	public $jumlah_kaki, $bisa_terbang, $suara;
}

function bersuara(){
	return "Meongg";
}

class Kucing extends Hewan {
	function bersuara(){
		return "Meoong";
	}
}

class Anjing extends Hewan {
	function bersuara(){
		return "Guk..Guk..";
	}
}

class Elang extends Hewan {
	function bersuara(){
		return "Miiiiip";
	}
}

class Angsa extends Hewan {
	function bersuara(){
		return "Kwak..Kwak..";
	}
}


$momo = new Kucing;
$momo->jumlah_kaki = 4;
echo "Momo adalah Kucing <br>";
echo "Punya Kaki Sebanyak : ".$momo->jumlah_kaki."<br>"; 
	$momo->bisa_terbang = "Tidak Bisa Terbang"; 
echo $momo->bisa_terbang."<br>"; 
echo "Suaranya : ".$momo->bersuara()."<br>";

echo "<hr>";

$doggo = new Anjing;
$doggo->jumlah_kaki = 4;
echo "Doggo adalah Anjing <br>";
echo "Punya Kaki Sebanyak : ".$doggo->jumlah_kaki."<br>"; 
	$doggo->bisa_terbang = "Tidak Bisa Terbang"; 
echo $doggo->bisa_terbang."<br>";
echo "Suaranya : ".$doggo->bersuara()."<br>";

echo "<hr>";

$zya = new Elang;
$zya->jumlah_kaki = 2;
echo "Zya adalah Elang <br>";
echo "Punya Kaki Sebanyak : ".$zya->jumlah_kaki."<br>"; 
	$zya->bisa_terbang = "Bisa Terbang"; 
echo $zya->bisa_terbang."<br>"; 
echo "Suaranya : ".$zya->bersuara()."<br>";

echo "<hr>";

$masha = new Angsa;
$masha->jumlah_kaki = 2;
echo "Masha adalah Angsa   <br>";
echo "Punya Kaki Sebanyak : ".$masha->jumlah_kaki."<br>"; 
	$masha->bisa_terbang = "Tidak Bisa Terbang"; 
echo $masha->bisa_terbang."<br>"; 
echo "Suaranya : ".$masha->bersuara()."<br>";

?>