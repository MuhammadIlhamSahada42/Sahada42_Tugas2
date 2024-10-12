<?php
class Mobil3{
    public string $nama;                     
    public string $merk = "Toyota";          
    public ?string $warna = null;             
    public int $tahun;                      
    public int $kecepatanMaksimal;  

    //Kondisi jika parameter kosong maka akan ditampilkanproperties dari objek
    function infoMobil(? String $nama){
        if(is_null($nama)){
            echo "Nama mobil adalah {$this->nama}" . PHP_EOL;
        }

        //Jika parameter memiliki nilai maka yang ditampilkan adalah parameter pada function
        else{
            echo "Mobil anda adalah $nama" . PHP_EOL;
        }
    }
    
}
