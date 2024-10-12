<?php

    //Include Class Mobil1.php
    require_once "Mobil1.php";

    //Inisiasi variacel (objek) mobilSatu
    $mobilSatu = new Mobil1();

    //Menambah properties pada objek mobilSatu
    $mobilSatu->nama    ="Avanza";
    $mobilSatu->merk    ="Toyota";
    $mobilSatu->warna   ="Hitam";
    $mobilSatu->tahun   = 2019;
    $mobilSatu->kecepatanMaksimal= 1000;

    echo "Nama : $mobilSatu->nama" . PHP_EOL;
    echo "Merk : $mobilSatu->merk" . PHP_EOL;
    echo "Warna : $mobilSatu->warna" . PHP_EOL;
    echo "Tahun : $mobilSatu->tahun" . PHP_EOL;
    echo "Kecepatan Maksimal : $mobilSatu->kecepatanMaksimal" . PHP_EOL;

    $mobilDua = new Mobil1();
    $mobilDua->nama     ="Brio";
    $mobilDua->merk     ="Honda";
    $mobilDua->warna    ="Merah";
    $mobilDua->tahun    =2018;
    $mobilDua->kecepatanMaksimal=1300;

    var_dump($mobilDua);
?>