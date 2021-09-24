<?php

// class ContohStatic {
//     public static $angka = 1;   //variabel

//     public static function hallo() {    // fungsi
//         return "Hallo" . self::$angka . " kali";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::hallo();
// echo <"br>";

class Contoh {
    public static $angka = 1;

    public function hallo() {
        return "Hallo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh();
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();
echo "<hr>";
$obj = new Contoh();
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();

?>