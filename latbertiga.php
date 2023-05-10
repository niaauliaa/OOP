<?php
// ini class yaitu kerangka dalam pembuatan program
class Handphone{
    // ini properti 
    public $pemilik;
    public $merk;
    public $ukuranLayar;

    // ini method yaitu fungsi atau aksi
    public function setpemilik($pemilik){
        $this->pemilik=$pemilik;
    }
    public function setmerk($merk){
        $this->merk=$merk;
    }
    public function setukuranLayar($ukuranLayar){
        $this->ukuranLayar=$ukuranLayar;
    }
    public function __destruct()
    {
        echo ' Ini dari destruktor. <br>';
    }
    // ini construction
    // Constructor adalah suatu function khusus yang akan dieksekusi ketika suatu objek dibuat
    public function __construct($pemilik, $merk, $ukuranLayar){
        $this->pemilik = $pemilik;
        $this->merk = $merk;
        $this->ukuranLayar = $ukuranLayar;
        
    }

    public function getCetak(){
        echo "Nama Pemilik: ". $this->pemilik;
        echo "<br>";
        echo "Merk Handphone: ".$this->merk;
        echo "<br>";
        echo "Ukuran Layar: ".$this->ukuranLayar;
        echo "<br>  <br>";
    }
}
// ini objek yaitu hasil atau penciptaan dari sebuah class
//variabel uti adalah sebuah objek
$uti = new Handphone("Uti", "Vivo", "6,35");
$uti->getCetak();

$nia = new Handphone("Nia", "Oppo", "6,2 inc");
$nia->getCetak();

$fania = new Handphone("Fania", "Xiaomi", "5,45 inc");
$fania->getCetak();

?>