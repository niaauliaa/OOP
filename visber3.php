<?php
class tanaman {
    public $nama ;
    private $warna ;
    protected $tinggi ;

    public function setnama($nama){
        $this ->nama =$nama ;
    }
    public function setwarna($warna){
        $this ->warna =$warna ;
    }
    public function settinggi($tinggi){
        $this ->tinggi =$tinggi ;
    }
    public function cetak(){
        return "Nama : " . $this->nama.
                "Warna : " . $this->warna.
                "Tinggi : " . $this->tinggi;
    }
}

$t1 = new tanaman ;
$t1->setnama ("Mawar <br>") ;
$t1->setwarna ("Merah <br>");
$t1->settinggi ("35 cm <br>");
echo $t1->cetak();

?>