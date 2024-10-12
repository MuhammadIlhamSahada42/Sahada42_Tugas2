<?php
    class Mobil4{
        const AUTHOR = "Sahada42";
        var ? String $nama = "Avanza";
        var String $merk;
        var ? String $warna = null;
        var int $tahun;
        var int $kecepatanMaksimal;

        // Function tambah kecepatan!!!
        function tambahKecepatan(){
            echo "Kecepatan bertambah!";
        }

        // Function info mobil 
        function infoMobil(? String $nama){
            if(is_null($nama)){
                echo "Nama mobil adalah {$this->nama}" . PHP_EOL;
            }
            else{
                echo "Mobil anda adalah $nama" . PHP_EOL;
            }
        }

        
    }
?>