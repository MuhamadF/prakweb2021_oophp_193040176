<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit;

    protected $diskon = 0;
    private $harga;

    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
 
    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100);
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penerbit, $penulis, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class Komik extends Produk {
    public $jmlHal;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0) {
        parent::__construct($judul, $penerbit, $penulis, $harga);
        $this->jmlHal = $jmlHal;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHal} Halaman.";
        return $str;
    }

}

class CetakInfoProduk {
    public function cetak(Produk $produk) {    
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk3 = new Komik("Naruto", "Shonen Jump", "Masashi Kishimoto", 50000, 100);
$produk4 = new Game("Grand Theft Auto", "Rockstar", "Rockstar", 99000, 50);

// echo "Komik : " . $produk3->getLabel();
// echo "<br>";
// echo "Game :" . $produk4->getLabel();
// echo "<br>";

echo $produk3->getInfoProduk();
echo "<br>";
echo $produk4->getInfoProduk();
echo "<hr>";

$produk3->setDiskon(50);
$produk4->setDiskon(70);
echo $produk3->getHarga();
echo "<br>";
echo $produk4->getHarga();
?>