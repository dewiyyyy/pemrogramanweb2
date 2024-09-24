<?php
include "Orang.php";

class Mahasiswa extends orang{
    public $nim;
    public $prodi;

    public function getNilaisemester(){

    }
}   

 class MahasiswaAsing extends Mahasiswa{

    // override
     public function ucapSalam(){
        echo "Hallo my name " . $this->nama . "<br>";
     }
    }