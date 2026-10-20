<?php

class Produk{

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;
}

//object
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung pajak
$pajak = Produk::PAJAK * 100; // 11
$jumlahpajak = $produk->harga * Produk::PAJAK; //1,1juta

//total
$total = $produk->harga + $jumlahpajak;

//hasil
echo "Produk: " . $produk->nama;
echo "<br/>";

echo "Harga: Rp. " . $produk->harga;
echo "<br/>";

echo "Stok: " . $produk->stok;
echo "<br/>";

echo "Pajak: " . $pajak . "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp. " . $total;