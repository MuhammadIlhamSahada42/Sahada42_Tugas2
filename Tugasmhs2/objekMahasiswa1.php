<?php 
//Incluade Class Mahasiswa1.php
require_once "Mahasiswa1.php";

// Inisialisasi variabel (objek) mahasiswaSatu
$mahasiswaSatu = new Mahasiswa1();

$mahasiswaSatu->nama                    ="Muhammad Ilham Sahada";
$mahasiswaSatu->nim                     ="23.240.0042";
$mahasiswaSatu->jenis_kelamin           ="Laki-Laki";
$mahasiswaSatu->alamat = $alamat        ="Desa Sidokare";
$mahasiswaSatu->umur                    = 20;
$mahasiswaSatu->angkatan = $angkatan    = 2023;


// Menambahkan padding secara manual untuk meluruskan output
echo "Nama                 = $mahasiswaSatu->nama" . PHP_EOL;
echo "NIM                  = $mahasiswaSatu->nim" . PHP_EOL;
echo "Jenis Kelamin        = $mahasiswaSatu->jenis_kelamin" . PHP_EOL;
echo "Alamat               = $mahasiswaSatu->alamat" . PHP_EOL;
echo "Umur                 = $mahasiswaSatu->umur" .PHP_EOL;
echo "Angkatan             = $mahasiswaSatu->angkatan" . PHP_EOL;

//Memanggil function tambahKata
echo $mahasiswaSatu->tambahanKata(). PHP_EOL;

// Manggil dan menampilkan constant
echo Mahasiswa1::AUTHOR;

echo"" . PHP_EOL;
echo"" . PHP_EOL;

// Inisialisasi variabel (objek) mahasiswaSatu
$mahasiswaDua = new Mahasiswa1();

$mahasiswaDua->nama                    ="Muhammad Satrio Prayoga";
$mahasiswaDua->nim                     ="23.240.0044";
$mahasiswaDua->jenis_kelamin           ="Laki-Laki";
$mahasiswaDua->alamat = $alamat        ="Desa Sragi";
$mahasiswaDua->umur                    = 19;
$mahasiswaDua->angkatan = $angkatan    = 2023;


// Menambahkan padding secara manual untuk meluruskan output
echo "Nama                 = $mahasiswaDua->nama" . PHP_EOL;
echo "NIM                  = $mahasiswaDua->nim" . PHP_EOL;
echo "Jenis Kelamin        = $mahasiswaDua->jenis_kelamin" . PHP_EOL;
echo "Alamat               = $mahasiswaDua->alamat" . PHP_EOL;
echo "Umur                 = $mahasiswaDua->umur" .PHP_EOL;
echo "Angkatan             = $mahasiswaDua->angkatan" . PHP_EOL;

//Memanggil function tambahKata
echo $mahasiswaSatu->tambahanKata(). PHP_EOL;

// Manggil dan menampilkan constant
echo Mahasiswa1::AUTHOR1;
?>