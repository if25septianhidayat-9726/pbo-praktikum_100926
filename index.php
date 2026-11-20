<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;


//object
$produk = new Produk();

$produk->setkode('P00001')->setnama('Laptop')->setharga('10000000')->setstok(5);


//hasil
echo "produk: ". $produk->getnama();
echo "<br>";

echo "harga: ". $produk->getharga();
echo "<br>";

echo "stok: ". $produk->getstok();
echo "<br>";

echo "pajak: ". $produk->pajak(). "%";
echo "<br>";

echo "total harga setelah pajak: ". $produk->total();