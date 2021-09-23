<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk3 = new Produk("Naruto", "Shonen Jump", "Masashi Kishimoto", 50000);
$produk4 = new Produk("Grand Theft Auto", "Rockstar", "Rockstar", 99000);
$produk2 = new Produk("Dota");

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game :" . $produk4->getLabel();
echo "<br>";
var_dump($produk2);

?>