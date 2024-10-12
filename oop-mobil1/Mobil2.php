<?php
class Mobil2 {
    public string $nama;                     
    public string $merk = "Toyota";          
    public ?string $warna = null;             
    public int $tahun;                      
    public int $kecepatanMaksimal;           

    // Membuat function tambahKecepatan
    public function tambahKecepatan() {
        echo "Kecepatan bertambah!";
    }
}
?>
