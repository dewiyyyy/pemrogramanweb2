<?php

class orang{
    protected $nama;

    public function setNama($nama){
        $this->nama = $nama;
    }
    public function ucapSalam(){
        echo "Hallo perkenalkan nama saya" . $this->nama . "<br>";

    }

}