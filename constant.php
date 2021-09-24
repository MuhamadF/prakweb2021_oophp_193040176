<?php

// define('NAMA', 'Muhamad Fawwazt');
// echo NAMA;
// echo "<br>";
// const UMUR = 21;
// echo UMUR;

// class Coba {
//   const NAMA = 'Fawwazt';
// }

// echo Coba::NAMA;

// echo __LINE__;

// echo __FILE__;

// function coba() {
//    return __FUNCTION__;
// }
// echo coba();

class Coba
{
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
?>