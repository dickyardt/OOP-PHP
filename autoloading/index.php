<?php

require_once 'App/init.php';

$produk1 = new Book("Calculus", "Purcell", "Pearson", 30000, 100);
$produk2 = new Film("The Imitation Game", "Graham Moore", "Box Office", 50000, 1);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();
