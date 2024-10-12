<?php

// Include Class Mobil3.php
require_once "Mobil3.php"; // Pastikan file ini ada dan memiliki kelas Mobil2

// Inisiasi variabel (objek) mobilSatu
$mobilSatu = new Mobil3();

// Menambah properties pada objek mobilSatu
$mobilSatu->nama = "Avanza";
$mobilSatu->merk = "Toyota";
$mobilSatu->warna = "Hitam";
$mobilSatu->tahun = 2019;
$mobilSatu->kecepatanMaksimal = 1000;

// Menampilkan informasi mobil
echo "Nama : $mobilSatu->nama" . PHP_EOL;
echo "Merk : $mobilSatu->merk" . PHP_EOL;
echo "Warna : $mobilSatu->warna" . PHP_EOL;
echo "Tahun : $mobilSatu->tahun" . PHP_EOL;
echo "Kecepatan Maksimal : $mobilSatu->kecepatanMaksimal" . PHP_EOL;

$mobilSatu->infoMobil("Xenia");

?>

