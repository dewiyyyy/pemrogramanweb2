<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratikum 4</title>
</head>
<body>
    <h1>konsep pewarisan</h1>
    <div class="">
        <?php
        require_once "OrangBiasa.php";
        require_once "OrangInggris.php";
        require_once "Mahasiswa.php";

        $james = new OrangBiasa();
        $james -> setNama ('james smith');
        $james -> UcapSalam();

        echo "<br>";

        $rano = new OrangInggris();
        $rano -> setNama("Rano Karno");
        $rano ->UcapSalam();

        echo "<br>";

        $mahasiswa = new Mahasiswa();
        $mahasiswa -> setNama('Emely Walker');
        $mahasiswa -> setNim("701230054");
        

        $nilaiMahasiswa = new Nilai();
        $nilaiMahasiswa -> setTugas(70);
        $nilaiMahasiswa -> setUts(67);
        $nilaiMahasiswa -> setUas(90);

        $mahasiswa -> setNilai($nilaiMahasiswa);  
        
        $mahasiswa ->ucapSalam();
        $mahasiswa -> tampilkanData();
     ?>
</div>  

</body>
</html>