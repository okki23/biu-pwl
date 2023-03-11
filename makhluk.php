<?php 
class Makhluk { 
    protected $nama;  

    public function ambil_nama($nama){
        $this->nama = $nama;
    }

    public function cetak_nama(){
        return $this->nama;
    }

    public static function cara_kembang_biak(){

    } 
}

$manusia = new Makhluk();
$manusia->ambil_nama('Slamet');
echo $manusia->cetak_nama();
echo "<br>";
?>