<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHal,
            $waktuMain;

    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0, $jmlHal = 0, $waktuMain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHal = $jmlHal;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk() {
        $str = "Game : " . parrent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class Komik extends Produk {
    public function getInfoProduk() {
        $str = "Komik : " . parrent::getInfoProduk() . " - {$this->jmlHal} Halaman.";
        return $str;
    }

}

class CetakInfoProduk {
    public function cetak(Produk $produk) {    
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk3 = new Komik("Naruto", "Shonen Jump", "Masashi Kishimoto", 50000, 100, 0);
$produk4 = new Game("Grand Theft Auto", "Rockstar", "Rockstar", 99000, 0, 50);

// echo "Komik : " . $produk3->getLabel();
// echo "<br>";
// echo "Game :" . $produk4->getLabel();
// echo "<br>";

echo $produk3->getInfoProduk();
echo "<br>";
echo $produk4->getInfoProduk();
?>