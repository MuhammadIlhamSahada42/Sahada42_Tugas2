<?php
// Incluade Mobil5.php
require_once "Mobil5.php";

$mobilSatu = new Mobil5("Avanza", "Toyota", 1999);
$mobilDua = new Mobil5("Brio", null, 2020);

echo $mobilSatu->infoMobil() . PHP_EOL;
echo $mobilDua->infoMobil();
?>