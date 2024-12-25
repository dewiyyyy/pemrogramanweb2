<<<<<<< HEAD
<?php

require_once "Buku.php";

class DaftarBuku{

    public function getData(){
        $daftar_buku = array(
            new Buku('Belajar pemograman web','Emely W.','Informatika','2024'),
            new Buku('Matematika Diskrit', 'Rinaldi munir','Andi Publisher','2020'),
            new Buku('Kalkulus','Robert T.','Erlangga','2019'),
            new Buku('Metodologi penelitian','Jamaes W','Pustaka UIN','2024'),

        );

        return $daftar_buku;

    }

    public function getKolomTabel(){
        return array('No','Judul','Pengarang','Penerbit','Tahun');

    }

=======
<?php

require_once "Buku.php";

class DaftarBuku{

    public function getData(){
        $daftar_buku = array(
            new Buku('Belajar pemograman web','Emely W.','Informatika','2024'),
            new Buku('Matematika Diskrit', 'Rinaldi munir','Andi Publisher','2020'),
            new Buku('Kalkulus','Robert T.','Erlangga','2019'),
            new Buku('Metodologi penelitian','Jamaes W','Pustaka UIN','2024'),

        );

        return $daftar_buku;

    }

    public function getKolomTabel(){
        return array('No','Judul','Pengarang','Penerbit','Tahun');

    }

>>>>>>> 642ff65 (menambahkan tugas)
}