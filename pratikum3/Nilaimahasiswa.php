<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nilai mahasiswa</title>
    <style>
    table,th,td {
         border: 1px solid black;
         border-collapse: collapse;
    }
    th,td {
        padding: 4px;
    }
    </style>
</head>
<body>
    <h2>Nilai Mahasiswa</h2>
    <table>
    <thead>
        <tr>
           <th>NO</th>
           <th>Nama</th>
           <th>Tugas</th>
           <th>Uts</th>
           <th>Uas</th>
           <th>Total Nilai</th>
 </tr>
     </thead>
</tbody>
    <?php
    include "Nilai.php";

    $mhs1 = new Nilai ();
    $mhs1 ->setTugas(90);
    $mhs1 ->setUts(85);
    $mhs1->setUas(95);

    $mhs2 = new Nilai ();
    $mhs2 ->setTugas(56);
    $mhs2 ->setUts(78);
    $mhs2->setUas(65);

    $mhs3 = new Nilai ();
    $mhs3 ->setTugas(78);
    $mhs3->setUts(34);
    $mhs3->setUas(45);

    echo "<tr>
         <td>1</td>
         <td>James smith</td>
         <td>" . $mhs1->getTugas() . "</td>
         <td>" . $mhs1->getUts() . "</td>
         <td>" . $mhs1->getUas() . "</td>
         <td>" . $mhs1->getTotalnilai (). "</td>
    </tr>";

    echo "<tr>
    <td>2</td>
    <td>James smith</td>
    <td>" . $mhs2->getTugas() . "</td>
    <td>" . $mhs2->getUts() . "</td>
    <td>" . $mhs2->getUas() . "</td>
    <td>" . $mhs2->getTotalnilai (). "</td>
</tr>";

   echo "<tr>
         <td>3</td>
         <td>James smith</td>
         <td>" . $mhs3->getTugas() . "</td>
         <td>" . $mhs3->getUts() . "</td>
         <td>" . $mhs3->getUas() . "</td>
         <td>" . $mhs3->getTotalnilai (). "</td>
    </tr>";


    ?>
</tbody>
</table>
</body>
</html>