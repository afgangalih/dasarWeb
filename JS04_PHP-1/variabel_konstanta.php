<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo"Hasil penjumlahan $angka1 dan $angka2 adalah $hasil";

echo"<br>";

$benar = true;
$salah= false;
echo"Variabel benar: $benar, Variabel salah: $salah";
echo"<br>";

//Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

echo"Selamat datang di ".NAMA_SITUS." yang dibangun pada tahun ".TAHUN_PENDIRIAN;
?>