<?php

class Produk {
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 10;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 50000;

$produk4 = new Produk();
$produk4->judul = "Judulbaru";
$produk4->penulis = "mf";
$produk4->penerbit = "mf";
$produk4->harga = 25000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Buku :" . $produk4->getLabel();

?>