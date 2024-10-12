<?php
class Mobil5{
    var String $nama;
    var ?String $merk = null;
    var int $tahun;
    
    // Function contanct
    public function __construct(String $nama, ?String $merk, int $tahun){
        $this->nama = $nama;
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    // Function Info Mobil
    public function infoMobil(){
        return "$this->nama, $this->merk, $this->tahun";
    }
}
?>