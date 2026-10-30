<?php

//panggil file propertyconstant
require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//object
$produk = new Produk('P0001', 'laptop', 10000000, 5);

//hasil
$produk->tampil();