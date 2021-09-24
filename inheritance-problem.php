<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHal,
            $waktuMain,
            $tipe;

    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0, $jmlHal = 0, $waktuMain = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHal = $jmlHal;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if($this->tipe == "Komik") {
            $str .= " - {$this->jmlHal} Halaman.";
        } else if($this->tipe == "Game") {
            $str.= " ~ {$this->waktuMain} Jam";
        }

        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {    
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk3 = new Produk("Naruto", "Shonen Jump", "Masashi Kishimoto", 50000, 100, 0, "Komik");
$produk4 = new Produk("Grand Theft Auto", "Rockstar", "Rockstar", 99000, 0, 50, "Game");

// echo "Komik : " . $produk3->getLabel();
// echo "<br>";
// echo "Game :" . $produk4->getLabel();
// echo "<br>";

echo $produk3->getInfoLengkap();
echo "<br>";
echo $produk4->getInfoLengkap();
?>