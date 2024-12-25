<<<<<<< HEAD
<?php

require_once "Model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
        //mengakses model
        $data= new DaftarBuku();

        //memberi data model ke view dan menampilkan view
        include "view/BukuView.php";

    }

=======
<?php

require_once "Model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
        //mengakses model
        $data= new DaftarBuku();

        //memberi data model ke view dan menampilkan view
        include "view/BukuView.php";

    }

>>>>>>> 642ff65 (menambahkan tugas)
}